<?php
declare(strict_types=1);

namespace SetBased\Stratum\Backend;

/**
 * Interface for classes that do the actual execution of the CRUD command.
 */
interface CrudWorker
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a list of all supported operations (i.e. insert, update, delete, select) by the worker.
   *
   * @return string[]
   */
  public function operations(): array;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a list of all tables in de database of the backend.
   *
   * @return string[]
   */
  public function tables(): array;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Generates the code for a stored routine.
   *
   * @param string $tableName   The name of the table.
   * @param string $operation   The operation {insert|update|delete|select}.
   * @param string $routineName The name of the generated routine.
   *
   * @return string
   */
  public function generateRoutine(string $tableName, string $operation, string $routineName): string;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
