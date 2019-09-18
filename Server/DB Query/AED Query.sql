CREATE TABLE `player` (
  `Id` varchar(12) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `Sex` char(1) NOT NULL,
  `Telnum` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
SELECT * FROM an_exchange_diary.player;

INSERT INTO `an_exchange_diary`.`player`
(`Id`,
`Password`,
`Name`,
`Email`,
`Age`,
`Sex`,
`Telnum`)
VALUES
(<{Id: }>,
<{Password: }>,
<{Name: }>,
<{Email: }>,
<{Age: }>,
<{Sex: }>,
<{Telnum: }>);
