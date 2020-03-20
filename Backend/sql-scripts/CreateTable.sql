/* SQL script for create periodic table's database */

CREATE TABLE elements (
    element_name VARCHAR(15) NOT NULL,
    atomic_number TINYINT(3) NOT NULL,
    symbol VARCHAR(2) NOT NULL,
    atomic_weight DECIMAL(10,8) NOT NULL,
    family  VARCHAR(40) NOT NULL
) ENGINE = INNODB;