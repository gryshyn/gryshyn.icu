/**
 * SyntaxHighlighter
 * http://alexgorbatchev.com/
 *
 * This brush was originally created by Ildar Shaimordanov
 * homepage:   http://with-love-from-siberia.blogspot.com/
 * brush page: http://with-love-from-siberia.blogspot.com/2009/07/finest-code-syntax-highlighter.html
 */
SyntaxHighlighter.brushes.MySQL = function()
{
    var geshiKeywords1 = 'ACTION ADD AFTER ALGORITHM ALL ALTER ANALYZE ANY ' +
        'ASC AS BDB BEGIN BERKELEYDB BINARY BTREE CALL ' +
        'CASCADED CASCADE CHAIN CHANGE CHECK COLUMNS COLUMN ' +
        'COMMENT COMMIT COMMITTED CONSTRAINT CONTAINS SQL ' +
        'CONSISTENT CONVERT CREATE CROSS DATA DATABASES ' +
        'DECLARE DEFINER DELAYED DELETE DESCRIBE DESC ' +
        'DETERMINISTIC DISABLE DISCARD DISTINCTROW DISTINCT DO ' +
        'DROP DUMPFILE DUPLICATE KEY ENABLE ENCLOSED BY ENGINE ' +
        'ERRORS ESCAPED BY EXISTS EXPLAIN EXTENDED FIELDS ' +
        'FIRST FOR EACH ROW FORCE FOREIGN KEY FROM FULL ' +
        'FUNCTION GLOBAL GRANT GROUP BY HANDLER HASH HAVING ' +
        'HELP HIGH_PRIORITY IF NOT EXISTS IGNORE IMPORT INDEX ' +
        'INFILE INNER INNODB INOUT INTO INVOKER ' +
        'ISOLATION LEVEL JOIN KEYS KEY KILL LANGUAGE SQL LAST ' +
        'LIMIT LINES LOAD LOCAL LOCK LOW_PRIORITY ' +
        'MASTER_SERVER_ID MATCH MERGE MIDDLEINT MODIFIES SQL DATA ' +
        'MODIFY MRG_MYISAM NATURAL NEXT NO SQL NO ON ' +
        'OPTIMIZE OPTIONALLY OPTION ORDER BY OUTER OUTFILE OUT ' +
        'PARTIAL PARTITION PREV PRIMARY KEY PRIVILEGES PROCEDURE ' +
        'PURGE QUICK READS SQL DATA READ REFERENCES RELEASE ' +
        'RENAME REORGANIZE REPEATABLE REQUIRE RESTRICT RETURNS ' +
        'REVOKE ROLLBACK ROUTINE RTREE SAVEPOINT SELECT ' +
        'SERIALIZABLE SESSION SET SHARE MODE SHOW SIMPLE ' +
        'SNAPSHOT SOME SONAME SQL SECURITY SQL_BIG_RESULT ' +
        'SQL_BUFFER_RESULT SQL_CACHE SQL_CALC_FOUND_ROWS ' +
        'SQL_NO_CACHE SQL_SMALL_RESULT SSL START STARTING BY ' +
        'STATUS STRAIGHT_JOIN STRIPED TABLESPACE TABLES TABLE ' +
        'TEMPORARY TEMPTABLE TERMINATED BY TO TRANSACTIONS ' +
        'TRANSACTION TRIGGER TYPES TYPE UNCOMMITTED UNDEFINED ' +
        'UNION UNLOCK_TABLES UPDATE USAGE USE USER_RESOURCES ' +
        'USING VALUES VALUE VIEW WARNINGS WHERE WITH ROLLUP ' +
        'WITH WORK WRITE CURRENT_USER DATABASE IN INSERT DEFAULT REPLACE SCHEMA TRUNCATE';

    var geshiKeywords2 = 'FALSE NULL TRUE DAY_HOUR DAY_MICROSECOND DAY_MINUTE DAY_SECOND ' +
        'HOUR_MICROSECOND HOUR_MINUTE HOUR_SECOND ' +
        'MINUTE_MICROSECOND MINUTE_SECOND ' +
        'SECOND_MICROSECOND YEAR_MONTH DAY HOUR MICROSECOND MINUTE MONTH QUARTER SECOND WEEK YEAR';
    
    var geshiKeywords3 = 'BIGINT BIT BLOB BOOLEAN BOOL CHARACTER VARYING ' +
        'CHAR VARYING DATETIME DECIMAL DEC DOUBLE PRECISION ' +
        'DOUBLE ENUM FIXED FLOAT GEOMETRYCOLLECTION GEOMETRY ' +
        'INTEGER INT LINESTRING LONGBLOB LONGTEXT MEDIUMBLOB ' +
        'MEDIUMINT MEDIUMTEXT MULTIPOINT MULTILINESTRING ' +
        'MULTIPOLYGON NATIONAL CHARACTER NATIONAL CHARACTER VARYING ' +
        'NATIONAL CHAR VARYING NATIONAL VARCHAR NCHAR VARCHAR NCHAR ' +
        'NUMERIC POINT POLYGON REAL SERIAL ' +
        'SMALLINT TEXT TIMESTAMP TINYBLOB TINYINT ' +
        'TINYTEXT VARBINARY VARCHARACTER VARCHAR CHAR DATE TIME';
    
    var geshiKeywords4 = 'AUTO_INCREMENT AVG_ROW_LENGTH BOTH CHECKSUM CONNECTION ' +
        'DATA DIRECTORY DEFAULT NULL DELAY_KEY_WRITE FULLTEXT ' +
        'INDEX DIRECTORY INSERT_METHOD LEADING MAX_ROWS MIN_ROWS ' +
        'NOT NULL PACK_KEYS ROW_FORMAT SERIAL DEFAULT VALUE SIGNED ' +
        'SPATIAL TRAILING UNIQUE UNSIGNED ZEROFILL CHARSET';

    var geshiKeywords5 = 'AND BETWEEN CHARACTER SET COLLATE DIV IS NOT NULL ' +
        'IS NOT IS NULL IS LIKE NOT OFFSET OR REGEXP RLIKE ' +
        'SOUNDS LIKE XOR INTERVAL';

    var geshiKeywords6 = 'CASE ELSE END IFNULL IF NULLIF THEN WHEN';

    var geshiKeywords7 = 'ASCII BIN BIT_LENGTH CHAR_LENGTH CHARACTER_LENGTH ' +
        'CONCAT_WS CONCAT ELT EXPORT_SET FIELD ' +
        'FIND_IN_SET FORMAT HEX INSTR LCASE LEFT LENGTH ' +
        'LOAD_FILE LOCATE LOWER LPAD LTRIM MAKE_SET MID ' +
        'OCTET_LENGTH ORD POSITION QUOTE REPEAT REVERSE ' +
        'RIGHT RPAD RTRIM SOUNDEX SPACE STRCMP SUBSTRING_INDEX ' +
        'SUBSTRING TRIM UCASE UNHEX UPPER INSERT REPLACE CHAR ' +
        'ABS ACOS ASIN ATAN2 ATAN CEILING CEIL ' +
        'CONV COS COT CRC32 DEGREES EXP FLOOR LN LOG10 ' +
        'LOG2 LOG MOD OCT PI POWER POW RADIANS RAND ' +
        'ROUND SIGN SIN SQRT TAN TRUNCATE ADDDATE ADDTIME CONVERT_TZ CURDATE CURRENT_DATE ' +
        'CURRENT_TIME CURRENT_TIMESTAMP CURTIME DATE_ADD ' +
        'DATE_FORMAT DATE_SUB DATEDIFF DAYNAME DAYOFMONTH ' +
        'DAYOFWEEK DAYOFYEAR EXTRACT FROM_DAYS FROM_UNIXTIME ' +
        'GET_FORMAT LAST_DAY LOCALTIME LOCALTIMESTAMP MAKEDATE ' +
        'MAKETIME MONTHNAME NOW PERIOD_ADD ' +
        'PERIOD_DIFF SEC_TO_TIME STR_TO_DATE SUBDATE SUBTIME ' +
        'SYSDATE TIME_FORMAT TIME_TO_SEC ' +
        'TIMESTAMPADD TIMESTAMPDIFF TO_DAYS ' +
        'UNIX_TIMESTAMP UTC_DATE UTC_TIME UTC_TIMESTAMP WEEKDAY ' +
        'WEEKOFYEAR YEARWEEK DATE DAY HOUR MICROSECOND MINUTE MONTH QUARTER ' +
        'SECOND TIME WEEK YEAR COALESCE GREATEST ISNULL LEAST IN INTERVAL ' + 
        'AES_DECRYPT AES_ENCRYPT COMPRESS DECODE DES_DECRYPT ' +
        'DES_ENCRYPT ENCODE ENCRYPT MD5 OLD_PASSWORD PASSWORD ' +
        'SHA1 SHA UNCOMPRESS UNCOMPRESSED_LENGTH AVG BIT_AND BIT_OR BIT_XOR COUNT GROUP_CONCAT ' +
        'MAX MIN STDDEV_POP STDDEV_SAMP STDDEV STD SUM ' +
        'VAR_POP VAR_SAMP VARIANCE BENCHMARK COERCIBILITY COLLATION CONNECTION_ID ' +
        'FOUND_ROWS LAST_INSERT_ID ROW_COUNT ' +
        'SESSION_USER SYSTEM_USER USER VERSION CURRENT_USER DATABASE SCHEMA CHARSET ' + 
        'ExtractValue BIT_COUNT GET_LOCK INET_ATON INET_NTOA ' +
        'IS_FREE_LOCK IS_USED_LOCK MASTER_POS_WAIT NAME_CONST ' +
        'RELEASE_LOCK SLEEP UpdateXML UUID DEFAULT';

    var geshiKeywords8 = 'Area AsBinary AsText AsWKB AsWKT Boundary Buffer ' +
        'Centroid Contains ConvexHull Crosses ' +
        'Difference Dimension Disjoint Distance ' +
        'EndPoint Envelope Equals ExteriorRing ' +
        'GLength GeomCollFromText GeomCollFromWKB GeomFromText ' +
        'GeomFromWKB GeometryCollectionFromText ' +
        'GeometryCollectionFromWKB GeometryFromText GeometryFromWKB ' +
        'GeometryN GeometryType ' +
        'InteriorRingN Intersection Intersects IsClosed IsEmpty ' +
        'IsRing IsSimple ' +
        'LineFromText LineFromWKB LineStringFromText ' +
        'LineStringFromWKB ' +
        'MBRContains MBRDisjoint MBREqual MBRIntersects ' +
        'MBROverlaps MBRTouches MBRWithin MLineFromText ' +
        'MLineFromWKB MPointFromText MPointFromWKB MPolyFromText ' +
        'MPolyFromWKB MultiLineStringFromText MultiLineStringFromWKB ' +
        'MultiPointFromText MultiPointFromWKB MultiPolygonFromText ' +
        'MultiPolygonFromWKB ' +
        'NumGeometries NumInteriorRings NumPoints ' +
        'Overlaps ' +
        'PointFromText PointFromWKB PointN PointOnSurface ' +
        'PolyFromText PolyFromWKB PolygonFromText PolygonFromWKB ' +
        'Related SRID StartPoint SymDifference ' +
        'Touches ' +
        'Union ' +
        'Within ' +
        'X ' +
        'Y';

        this.regexList = [
        // REM Comments
        {   regex: /(^::|rem).*$/gmi,                               css: 'comments'},
        // "Strings", 'Strings ' + `Strings`, ECHO String
        {   regex: SyntaxHighlighter.regexLib.doubleQuotedString,   css: 'string'},
        {   regex: SyntaxHighlighter.regexLib.singleQuotedString,   css: 'string'},
        {   regex: /`(?:\.|(\\\`)|[^\``\n])*`/g,                    css: 'string'},
        {   regex: /echo.*$/gmi,                                    css: 'string'},
        // :Labels
        {   regex: /^:.+$/gmi,                                      css: 'color3'},
        // %Variables%, !Variables!
        {   regex: /(%|!)\w+\1/gmi,                                 css: 'variable'},
        // %%a variable Refs, %1 variable Refs
        {   regex: /%\*|%%?~?[fdpnxsatz]*[0-9a-z]\b/gmi,            css: 'variable'},
        // geshi
        {   regex: new RegExp(this.getKeywords(geshiKeywords1), 'gmi'),   css: 'mysql1'},
        {   regex: new RegExp(this.getKeywords(geshiKeywords2), 'gmi'),   css: 'mysql2'},
        {   regex: new RegExp(this.getKeywords(geshiKeywords3), 'gmi'),   css: 'mysql3'},
        {   regex: new RegExp(this.getKeywords(geshiKeywords4), 'gmi'),   css: 'mysql4'},
        {   regex: new RegExp(this.getKeywords(geshiKeywords5), 'gmi'),   css: 'mysql5'},
        {   regex: new RegExp(this.getKeywords(geshiKeywords6), 'gmi'),   css: 'mysql6'},
        {   regex: new RegExp(this.getKeywords(geshiKeywords7), 'gmi'),   css: 'mysql7'},
        {   regex: new RegExp(this.getKeywords(geshiKeywords8), 'gmi'),   css: 'mysql8'}
    ];
};

SyntaxHighlighter.brushes.MySQL.prototype = new SyntaxHighlighter.Highlighter();
SyntaxHighlighter.brushes.MySQL.aliases = ['mysql'];
