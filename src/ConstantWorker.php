<?php
declare(strict_types=1);

namespace SetBased\Stratum\Backend;

/**
 * Interface for classes that do the actual execution of the constant command.
 */
interface ConstantWorker
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Does the actual execution of the constant command for the backend. Returns 0 on success. Otherwise returns nonzero.
   *
   * @return int
   */
  public function execute(): int;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
