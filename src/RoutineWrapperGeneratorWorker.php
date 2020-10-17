<?php
declare(strict_types=1);

namespace SetBased\Stratum\Backend;

/**
 * Interface for classes that do the actual execution of the routine wrapper generator command.
 */
interface RoutineWrapperGeneratorWorker
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Does the actual execution of the routine wrapper generator loader command for the backend. Returns 0 on success.
   * Otherwise returns nonzero.
   *
   * @return int
   */
  public function execute(): int;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
