<?php
declare(strict_types=1);

namespace SetBased\Stratum;

/**
 * Interface for classes that do the actual execution of the routine loader command.
 */
interface RoutineLoaderWorker
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Does the actual execution of the routine loader command for the backend. Returns 0 on success. Otherwise returns
   * nonzero.
   *
   * @return int
   */
  public function execute(): int;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
