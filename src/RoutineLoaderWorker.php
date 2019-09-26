<?php
declare(strict_types=1);

namespace SetBased\Stratum\Backend;

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
   * @param array|null $sources An optional list of paths to sources of stored routines that must be loaded. If null all
   *                            sources must be loaded.
   *
   * @return int
   */
  public function execute(?array $sources=null): int;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
