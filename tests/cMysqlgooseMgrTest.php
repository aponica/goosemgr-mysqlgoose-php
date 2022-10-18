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

      set_include_path( get_include_path() . PATH_SEPARATOR .
        'vendor/aponica/mysqlgoose-php/tests-config' );

      $iGooseMgr = new cMysqlgooseMgr( 'definitions.json' );

      $iGooseMgr->fConnect( 'config_mysql.json' );

      $this->assertSame( '$Mysqlgoose$POPULATE$', $iGooseMgr->fzPopulate() );

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
