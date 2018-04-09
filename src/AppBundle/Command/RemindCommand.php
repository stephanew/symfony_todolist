<?php
/**
 * Created by PhpStorm.
 * User: stephanew
 * Date: 2018/4/5
 * Time: 下午7:25
 */

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Controller\ListController;
use Symfony\Component\Cache\Traits\RedisTrait;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class RemindCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            // 命令的名字（"bin/console" 后面的部分）
            ->setName('app:remind-todo')

            ->addArgument('mailAddress', InputArgument::REQUIRED, 'The mail address of the user.')
            ->addArgument('content', InputArgument::REQUIRED, 'The content of the mail.')

            // the short description shown while running "php bin/console list"
            // 运行 "php bin/console list" 时的简短描述
            ->setDescription('Remind users todo list.')

            // the full command description shown when running the command with
            // the "--help" option
            // 运行命令时使用 "--help" 选项时的完整命令描述
            ->setHelp("This command allows you to remind users todo list...")
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $mailAddress = $input->getArgument('mailAddress');
        $mailFrom = $this->getContainer()->getParameter('mailer_user');
        $content = $input->getArgument('content');
        $message = \Swift_Message::newInstance()
            ->setSubject('remind todo list Email')
            ->setFrom($mailFrom)
            ->setTo($mailAddress)
            ->setBody("<table align='center' border='1' width='500'><tr>
                <th>提醒事项</th></tr><tr><td style='text-align:center'>{$content}</td></tr><table>"
                ,
                'text/html'
            );
        $this->getContainer()->get('mailer')->send($message);
    }
}