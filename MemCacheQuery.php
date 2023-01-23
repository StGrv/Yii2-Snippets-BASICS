// Object init from the MemCache class
$sqlMemCached = new SqlMemCached();

// Query preparing
$sqlMemCached->prepare( MyDB::className(), '_MY_UNIQUE_KEY_' )->queryBuilder()
    ->select(['id', 'title', 'description'])
    ->where(['id' => 1, 'active' => 1])
    ->orderBy( [ 'sort' => SORT_ASC ] );

// Query execution
$obj = $sqlMemCached->returnOne();
