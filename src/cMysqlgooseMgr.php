<?php declare(strict_types=1);
//=============================================================================
// Copyright 2019-2022 Opplaud LLC and other contributors. MIT licensed.
//=============================================================================

namespace Aponica\MysqlgooseMgr;

use Aponica\GooseMgr\cGooseMgr;
use Aponica\Mysqlgoose\Mysqlgoose;

//-----------------------------------------------------------------------------
/// Goose Manager for Mysqlgoose Database Abstraction.
///
/// A "Goose Manager" provides a consistent way to access an object or
/// relational database. A "Mysqlgoose Manager" allows
/// <a href="https://aponica.com/docs/mysqlgoose-php">Mysqlgoose</a>
/// to be managed consistently with other types of "Goose."
//-----------------------------------------------------------------------------

class cMysqlgooseMgr extends cGooseMgr {

  //---------------------------------------------------------------------------
  /// Constructs a cMysqlgooseMgr object.
  ///
  /// @param hDefinitions
  ///   The definitions hash (associative array) used to create schemas
  ///   for the database.
  ///
  ///   The hash contains one member for each table or collection to
  ///   be accessed. The name of the member is the name of the table or
  ///   collection, and its value is a hash as expected by
  ///   <a href="https://aponica.com/docs/mysqlgoose-php/classAponica_1_1Mysqlgoose_1_1Schema.html"
  ///   >Aponica\Mysqlgoose\Schema</a>.
  ///
  ///   The hash may contain a member named `"//"` with any value;
  ///   it is assumed to be a comment member, and is ignored.
  ///
  ///   The hash is typically created by parsing the output of
  ///   <a href="https://aponica.com/docs/mysqlgoose-schema-js"
  ///     >npx @aponica/mysqlgoose-schema-js</a> using `json_decode()`.
  //---------------------------------------------------------------------------

  function __construct( $hDefinitions ) {
    parent::__construct( $hDefinitions, new Mysqlgoose() );
    }


  //---------------------------------------------------------------------------
  /// Private interface to connect to a database.
  ///
  /// Used by <a
  /// href="https://aponica.com/docs/goosemgr-php/classAponica_1_1GooseMgr_1_1cGooseMgr.html"
  /// >\Aponica\GooseMgr\cGooseMgr::fConnect()</a> to establish the
  /// connection.
  ///
  /// @param hConfig
  ///   The configuration parameters as expected by <a
  ///   href="https://aponica.com/docs/mysqlgoose-php/classAponica_1_1Mysqlgoose_1_1Mysqlgoose.html"
  ///   >\Aponica\Mysqlgoose\Mysqlgoose::connect()</a>.
  ///
  /// @returns Mysqlgoose:
  ///   A connection to the database (really, a Mysqlgoose instance).
  //---------------------------------------------------------------------------

  protected function fiCreateConnection( $hConfig ) : object {

    // TODO: support multiple connections

    $this->fiGoose()->connect( $hConfig );
    return $this->fiGoose();

    } // fiCreateConnection

  }; // cMysqlgooseMgr

// EOF
