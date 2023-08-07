/* SYMFONY.SQL */

update euros set credit=0.0 where credit is null;
update euros set debit =0.0 where debit  is null;
alter table euros modify budget varchar(100);
alter table euros modify compte varchar(100);
insert into euros
(compte, date, libelle, credit, debit,banque, budget) values
('ccsg','2000-01-01','init',0.0,356.10,'2000-01-01','init'),
('cvi philippe','2000-01-01','init',804.41,0.0,'2000-01-01','init'),
('cvi nicole','2000-01-01','init',2800.0,0.0,'2000-01-01','init');


/* end of file */
