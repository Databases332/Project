echo "ddl"
mysql -u b60915d3fb3af8 -h "us-cdbr-iron-east-03.cleardb.net" -p < ddl.sql;
#mysql -u root -p < ddl.sql;
echo "dml"
mysql -u b60915d3fb3af8 -h "us-cdbr-iron-east-03.cleardb.net" -p < dml.sql;
