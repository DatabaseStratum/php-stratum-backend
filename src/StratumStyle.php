<?php
declare(strict_types=1);

namespace SetBased\Stratum\Backend;

use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Output decorator based on Symfony Style Guide.
 */
class StratumStyle extends SymfonyStyle
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * @inheritdoc
   */
  public function __construct(InputInterface $input, OutputInterface $output)
  {
    parent::__construct($input, $output);

    // Create style notes.
    $style = new OutputFormatterStyle('yellow');
    $output->getFormatter()->setStyle('note', $style);

    // Create style for database objects.
    $style = new OutputFormatterStyle('green', null, ['bold']);
    $output->getFormatter()->setStyle('dbo', $style);

    // Create style for file and directory names.
    $style = new OutputFormatterStyle(null, null, ['bold']);
    $output->getFormatter()->setStyle('fso', $style);

    // Create style for SQL statements.
    $style = new OutputFormatterStyle('magenta', null, ['bold']);
    $output->getFormatter()->setStyle('sql', $style);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Logs a message according to a format string at verbosity level OutputInterface::VERBOSITY_NORMAL.
   *
   * @param string $format    The format string, see sprintf.
   * @param mixed  ...$values The values.
   *
   * @return void
   */
  public function logDebug(string $format, mixed ...$values): void
  {
    if ($this->getVerbosity()>=OutputInterface::VERBOSITY_DEBUG)
    {
      $this->writeln(vsprintf('<info>'.$format.'</info>', $values));
    }
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Logs a message according to a format string at verbosity level OutputInterface::VERBOSITY_NORMAL.
   *
   * @param string $format    The format string, see sprintf.
   * @param mixed  ...$values The values.
   *
   * @return void
   */
  public function logInfo(string $format, mixed ...$values): void
  {
    if ($this->getVerbosity()>=OutputInterface::VERBOSITY_NORMAL)
    {
      $this->writeln(vsprintf('<info>'.$format.'</info>', $values));
    }
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Logs a message according to a format string at verbosity level OutputInterface::VERBOSITY_NORMAL.
   *
   * @param string $format    The format string, see sprintf.
   * @param mixed  ...$values The values.
   *
   * @return void
   */
  public function logNote(string $format, mixed ...$values): void
  {
    if ($this->getVerbosity()>=OutputInterface::VERBOSITY_NORMAL)
    {
      $this->writeln('<note> ! [NOTE] '.vsprintf($format, $values).'</note>');
    }
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Logs a message according to a format string at verbosity level OutputInterface::VERBOSITY_VERBOSE.
   *
   * @param string $format    The format string, see sprintf.
   * @param mixed  ...$values The values.
   *
   * @return void
   */
  public function logVerbose(string $format, mixed ...$values): void
  {
    if ($this->getVerbosity()>=OutputInterface::VERBOSITY_VERBOSE)
    {
      $this->writeln(vsprintf('<info>'.$format.'</info>', $values));
    }
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Logs a message according to a format string at verbosity level OutputInterface::VERBOSITY_VERY_VERBOSE.
   *
   * @param string $format    The format string, see sprintf.
   * @param mixed  ...$values The values.
   *
   * @return void
   */
  public function logVeryVerbose(string $format, mixed ...$values): void
  {
    if ($this->getVerbosity()>=OutputInterface::VERBOSITY_VERY_VERBOSE)
    {
      $this->writeln(vsprintf('<info>'.$format.'</info>', $values));
    }
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
