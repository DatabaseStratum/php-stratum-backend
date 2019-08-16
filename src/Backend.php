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
   * @param array        $settings The settings from the configuration file.
   * @param StratumStyle $io       The output decorator.
   *
   * @return ConstantWorker
   */
  public function createConstantWorker(array $settings, StratumStyle $io): ConstantWorker;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates the object that does the actual execution of the routine loader command for the backend.
   *
   * @param array        $settings The settings from the configuration file.
   * @param StratumStyle $io       The output decorator.
   *
   * @return RoutineLoaderWorker
   */
  public function createRoutineLoaderWorker(array $settings, StratumStyle $io): RoutineLoaderWorker;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates the object that does the actual execution of the routine wrapper generator command for the backend.
   *
   * @param array        $settings The settings from the configuration file.
   * @param StratumStyle $io       The output decorator.
   *
   * @return RoutineWrapperGeneratorWorker
   */
  public function createRoutineWrapperGeneratorWorker(array $settings, StratumStyle $io): RoutineWrapperGeneratorWorker;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
