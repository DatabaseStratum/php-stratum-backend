<?php
declare(strict_types=1);

namespace SetBased\Stratum\Backend;

/**
 * Semi interface for PhpStratum's backends.
 */
class Backend
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates the object that does the actual execution of the constant command for the backend.
   *
   * @param Config       $settings The settings from the PhpStratum configuration file.
   * @param StratumStyle $io       The output object.
   *
   * @return ConstantWorker|null
   */
  public function createConstantWorker(Config $settings, StratumStyle $io): ?ConstantWorker
  {
    unset($settings, $io);

    return null;
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates the object that does the actual execution of the CRUD command for the backend.
   *
   * @param Config       $settings The settings from the PhpStratum configuration file.
   * @param StratumStyle $io       The output decorator.
   *
   * @return CrudWorker|null
   */
  public function createCrudWorker(Config $settings, StratumStyle $io): ?CrudWorker
  {
    unset($settings, $io);

    return null;
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates the object that does the actual execution of the routine loader command for the backend.
   *
   * @param Config       $settings The settings from the PhpStratum configuration file.
   * @param StratumStyle $io       The output decorator.
   *
   * @return RoutineLoaderWorker|null
   */
  public function createRoutineLoaderWorker(Config $settings, StratumStyle $io): ?RoutineLoaderWorker
  {
    unset($settings, $io);

    return null;
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates the object that does the actual execution of the routine wrapper generator command for the backend.
   *
   * @param Config       $settings The settings from the PhpStratum configuration file.
   * @param StratumStyle $io       The output decorator.
   *
   * @return RoutineWrapperGeneratorWorker|null
   */
  public function createRoutineWrapperGeneratorWorker(Config $settings,
                                                      StratumStyle $io): ?RoutineWrapperGeneratorWorker
  {
    unset($settings, $io);

    return null;
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
