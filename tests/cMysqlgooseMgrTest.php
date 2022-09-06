<?php declare(strict_types=1);
//=============================================================================
// Copyright 2019-2022 Opplaud LLC and other contributors. MIT licensed.
//=============================================================================

use Aponica\MysqlgooseMgr\cMysqlgooseMgr;
use PHPUnit\Framework\TestCase;

final class cMysqlgooseMgrTest extends TestCase {

  //---------------------------------------------------------------------------

  public function testEverything() {

    try {

      $iGooseMgr = new cMysqlgooseMgr( json_decode(
        file_get_contents(
          'vendor/aponica/mysqlgoose-php/tests-config/definitions.json',
          true ),
        true
        ) );

      $iGooseMgr->fConnect( json_decode(
        file_get_contents(
          'vendor/aponica/mysqlgoose-php/tests-config/config_mysql.json',
          true ),
        true
        ) );

      $hCustomer = $iGooseMgr->fiModel( 'customer' )->findById( 1 );

      $this->assertIsArray( $hCustomer );

      $this->assertArrayHasKey( 'nId', $hCustomer );

      $this->assertSame( 1, $hCustomer[ 'nId' ] );

      }
    catch ( Throwable $iThrown ) {
      $this->assertSame( 'to never happen', $iThrown );
      }

    } // testEverything

} // cMysqlgooseMgrTest

// EOF
