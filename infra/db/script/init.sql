-- Unitテストに使用するデータベースを作成
CREATE DATABASE IF NOT EXISTS
	unit_sample_test;

-- Unitテストで使用するデータベースに権限を設定
GRANT
	ALL
ON unit_sample_test.* TO unit_sample;
