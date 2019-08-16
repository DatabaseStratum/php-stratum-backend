<?php
declare(strict_types=1);

namespace SetBased\Stratum;

/**
 * Interface PhpStratum's backends.
 */
interface Backend
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates the object that does the actual execution of the constant command for the backend.
   *
   * @param Config       $settings The settings from the PhpStratum configuration file.
   * @param StratumStyle $io       The output decorator.
   *
   * @return ConstantWorker
   */
  public function createConstantWorker(Config $settings, StratumStyle $io): ConstantWorker;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates the object that does the actual execution of the routine loader command for the backend.
   *
   * @param Config       $settings The settings from the PhpStratum configuration file.
   * @param StratumStyle $io       The output decorator.
   *
   * @return RoutineLoaderWorker
   */
  public function createRoutineLoaderWorker(Config $settings, StratumStyle $io): RoutineLoaderWorker;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates the object that does the actual execution of the routine wrapper generator command for the backend.
   *
   * @param Config       $settings The settings from the PhpStratum configuration file.
   * @param StratumStyle $io       The output decorator.
   *
   * @return RoutineWrapperGeneratorWorker
   */
  public function createRoutineWrapperGeneratorWorker(Config $settings,
                                                      StratumStyle $io): RoutineWrapperGeneratorWorker;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
