<?php
declare(strict_types=1);

namespace SetBased\Stratum\Backend;

/**
 * Interface for getting configuration settings.
 */
interface Config
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a boolean configuration setting.
   *
   * @param string    $key     The key of the configuration setting. The key might be nested using dot notation.
   * @param bool|null $default The default value.
   *
   * @return bool
   */
  public function manBool(string $key, ?bool $default = null): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a finite float configuration setting.
   *
   * @param string     $key     The key of the configuration setting. The key might be nested using dot notation.
   * @param float|null $default The default value.
   *
   * @return float
   */
  public function manFiniteFloat(string $key, ?float $default = null): float;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a float configuration setting.
   *
   * @param string     $key     The key of the configuration setting. The key might be nested using dot notation.
   * @param float|null $default The default value.
   *
   * @return float
   */
  public function manFloat(string $key, ?float $default = null): float;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an integer configuration setting.
   *
   * @param string   $key     The key of the configuration setting. The key might be nested using dot notation.
   * @param int|null $default The default value.
   *
   * @return int
   */
  public function manInt(string $key, ?int $default = null): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a string configuration setting.
   *
   * @param string      $key     The key of the configuration setting. The key might be nested using dot notation.
   * @param string|null $default The default value.
   *
   * @return string
   */
  public function manString(string $key, ?string $default = null): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional boolean configuration setting.
   *
   * @param string    $key     The key of the configuration setting. The key might be nested using dot notation.
   * @param bool|null $default The default value.
   *
   * @return bool
   */
  public function optBool(string $key, ?bool $default = null): ?bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional finite float configuration setting.
   *
   * @param string     $key     The key of the configuration setting. The key might be nested using dot notation.
   * @param float|null $default The default value.
   *
   * @return float
   */
  public function optFiniteFloat(string $key, ?float $default = null): ?float;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional float configuration setting.
   *
   * @param string     $key     The key of the configuration setting. The key might be nested using dot notation.
   * @param float|null $default The default value.
   *
   * @return float
   */
  public function optFloat(string $key, ?float $default = null): ?float;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional integer configuration setting.
   *
   * @param string   $key     The key of the configuration setting. The key might be nested using dot notation.
   * @param int|null $default The default value.
   *
   * @return int
   */
  public function optInt(string $key, ?int $default = null): ?int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional string configuration setting.
   *
   * @param string      $key     The key of the configuration setting. The key might be nested using dot notation.
   * @param string|null $default The default value.
   *
   * @return string
   */
  public function optString(string $key, ?string $default = null): ?string;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
