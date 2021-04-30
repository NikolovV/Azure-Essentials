CREATE TABLE VoteOptions (OptionName nvarchar(25) PRIMARY KEY);

INSERT INTO VoteOptions VALUES ('Cats'), ('Dogs');

CREATE TABLE VoteCasts (ID int IDENTITY(1,1) PRIMARY KEY, VoteOption nvarchar(25));