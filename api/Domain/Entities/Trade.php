<?php
namespace PhpDraft\Domain\Entities;

class Trade {
  /** @var int */
  public $trade_id;

  /** @var int */
  public $draft_id;

  /** @var int Used for loading from DB. Access Manager ID from manager object. */
  public $manager1_id;

  /** @var int Used for loading DB. Access Manager ID from manager object. */
  public $manager2_id;

  /** @var manager_object */
  public $manager1;

  /** @var manager_object */
  public $manager2;

  /** @var string The timestamp of this trade */
  public $trade_time;

  /** @var array All assets involved in this trade */
  public $trade_assets;

  /** @var array Error messages from validation of asset ownership */
  public $ownership_errors;

  public function __construct() {
    
  }
}