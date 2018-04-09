<?php
/**
 * Created by PhpStorm.
 * User: stephanew
 * Date: 2018/4/5
 * Time: 下午7:25
 */

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Controller\ListController;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\ProcessBuilder;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class CallRemindCommand extends ContainerAwareCommand
{
    protected $retry = 0;
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            // 命令的名字（"bin/console" 后面的部分）
            ->setName('app:call-remind')

            // the short description shown while running "php bin/console list"
            // 运行 "php bin/console list" 时的简短描述
            ->setDescription('Call Remind users todo list.')

            // the full command description shown when running the command with
            // the "--help" option
            // 运行命令时使用 "--help" 选项时的完整命令描述
            ->setHelp("This command allows you to call remind users todo list...")
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $dsn = "mysql:host={$this->getContainer()->getParameter('database_host')};
        dbname={$this->getContainer()->getParameter('database_name')}";
        $username=$this->getContainer()->getParameter('database_user');
        $passwd=$this->getContainer()->getParameter('database_password');
        $pdo=new \PDO($dsn,$username,$passwd);
        $sql = "SELECT id, content_id, mail_address, send_time FROM mail where status = 1 and send_status = 0";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        foreach ($data as $index => $datum) {
            if ($datum['send_time'] <= time()) {
                try {
                    if ((time() - $datum['send_time']) > 3600) {
                        $sql = "UPDATE `mail` SET `send_status` = 2 where id = {$datum['id']}";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                    } else {
                        $sql = "SELECT content FROM data where id = {$datum['content_id']}";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $dataContent = $stmt->fetch(\PDO::FETCH_ASSOC);
                        $content = !empty($dataContent['content']) ? $dataContent['content'] : '';
                        $process = new Process("php bin/console app:remind-todo {$datum['mail_address']} {$content}");
                        $process->setTimeout(3600);
                        $process->setIdleTimeout(10);
                        $process->run();
                        $sql = "UPDATE `mail` SET `send_status` = 1 where id = {$datum['id']}";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                    }
                } catch (\Exception $e){
                    echo $e->getMessage();
                    continue;
                }

            }
        }

        $outputData = "send compelete";
        $output->writeln($outputData);

    }
}