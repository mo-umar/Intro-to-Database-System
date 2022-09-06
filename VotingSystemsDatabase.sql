drop table Volunteer;
drop table VolunteerLocation;
drop table Candidate;
drop table Locations;
drop table Voter;
drop table Votes;
 
create table Candidate (
	Candidate_id int primary key,
	FirstName varchar(20),
	LastName varchar(20),
	CandidateDOB date,
	CandidateParty varchar(20),
	FOREIGN KEY(Candidate_id) REFERENCES Volunteer(Volunteer_id)
);
insert into Candidate values
	(100, 'Donald', 'Trump', to_date ('06/14/1946','DD/MM/YYYY'), 'Republican');
insert into Candidate values
	(200,'Joe', 'Biden', to_date ('11/20/1942','DD/MM/YYYY'), 'Democrat');
 
create table Voter (
	Voter_id int primary key,
	FirstName varchar(20),
	LastName varchar(20),
	VoterDOB date,
	VoterParty varchar(20) foreign key references Candidate(CandidateParty)
);
insert into Voter values
	(0111, 'John', 'William', to_date ('04/19/1991','DD/MM/YYYY'), 'Democrat');
insert into Voter values
	(0222, 'Cliff', 'Ikin', to_date ('09/25/1988','DD/MM/YYYY'), 'Republican');
insert into Voter values
	(0333, 'Miley', 'Morin', to_date ('01/23/1972','DD/MM/YYYY'), 'Republican');
insert into Voter values
	(0444, 'Elfrieda', 'Wootton', to_date ('12/25/1990','DD/MM/YYYY'), 'Democrat');
insert into Voter values
	(0555, 'Jonnie', 'Anderson', to_date ('03/02/1991','DD/MM/YYYY'), 'Democrat');
insert into Voter values
	(0666, 'Alphonso', 'Saylor', to_date ('11/05/1985','DD/MM/YYYY'), 'Republican');
insert into Voter values
	(0777, 'James', 'Smith', to_date ('02/29/1999','DD/MM/YYYY'), 'Democrat');
 
create table Votes (
	Voter_id int,
	Locations varchar(20), 
	constraint Votes1 primary key (Voter_id,Locations),
	constraint Votes2 foreign key (Voter_id) 
                references Voter(Voter_id) on delete cascade,
	constraint Votes3 foreign key (Locations) 
                references Locations(PollLocation)on delete cascade 		
);
insert into Votes values
	(0111, 'Marietta');
insert into Votes values
	(0222, 'Kennesaw');
insert into Votes values
	(0333, 'Atlanta');
insert into Votes values
	(0444, 'Atlanta');
insert into Votes values
	(0555, 'Marietta');
insert into Votes values
	(0666, 'Kennesaw');
insert into Votes values
	(0777, 'Marietta');

create table Volunteer(
        Volunteer_id int primary key,
        FirstName varchar(20),
        LastName varchar(20),
        VolunteerDOB data,
        VolunteerLocation varchar(30) foreign key references VolunteerLocation(VolunteerLocation),
		FOREIGN KEY(Volunteer_id) REFERENCES Candidate(Candidate_id)
);
insert into Volunteer values 
        (001,'Gene','Short', to_date('10/28/1996','DD/MM/YYYY'),'Marietta');
insert into Volunteer values
        (002,'Bettye','Vipond', to_date('12/03/1990','DD/MM/YYYY'),'Kennesaw');
insert into Volunteer values
        (003,'Kieron','Henry', to_date('08/15/1994','DD/MM/YYYY'),'Atlanta');

create table VolunteerLocation(
        VolunteerLocation varchar(30) primary key,
        Outcome varchar(15)
);
insert into VolunteerLocation values
        ('Marietta','Democrat');
insert into VolunteerLocation values
        ('Kennesaw','Republican');
insert into VolunteerLocation values
        ('Atlanta','Democrat');

create table Locations(
        Location_id int primary key,
        Voter_id int foreign key references Voter(Voter_id),
        Volunteer_id int foreign key references Volunteer(Volunteer_id),
        PollLocation varchar(30) foreign key references Votes(Location)
);
insert into Locations values
        (1001,0111,001,'Marietta');
insert into Locations values
        (1002,0222,002,'Kennesaw');
insert into Locations values
        (1003,0333,003,'Atlanta');
insert into Locations values
        (1004,0444,003,'Atlanta');
insert into Locations values
        (1005,0555,001,'Marietta');
insert into Locations values
        (1006,0666,002,'Kennesaw');
insert into Locations values
        (1007,0777,001,'Marietta');