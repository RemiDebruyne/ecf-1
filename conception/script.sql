CREATE TABLE Courses(
   course_id COUNTER,
   activity VARCHAR(50),
   PRIMARY KEY(course_id)
);

CREATE TABLE Time_slots(
   timeslot_id COUNTER,
   start_time TIME,
   end_time TIME,
   PRIMARY KEY(timeslot_id)
);

CREATE TABLE Users(
   user_id COUNTER,
   name VARCHAR(50),
   email VARCHAR(50),
   password VARCHAR(50),
   PRIMARY KEY(user_id)
);

CREATE TABLE Admins(
   user_id INT,
   is_admin LOGICAL NOT NULL,
   PRIMARY KEY(user_id),
   FOREIGN KEY(user_id) REFERENCES Users(user_id)
);

CREATE TABLE Clients(
   user_id INT,
   birth_year DATE,
   PRIMARY KEY(user_id),
   FOREIGN KEY(user_id) REFERENCES Users(user_id)
);

CREATE TABLE Reservations(
   timeslot_id INT,
   course_id INT,
   reservation_id COUNTER,
   reservation_date DATE,
   user_id INT NOT NULL,
   PRIMARY KEY(timeslot_id, course_id, reservation_id),
   FOREIGN KEY(timeslot_id) REFERENCES Time_slots(timeslot_id),
   FOREIGN KEY(course_id) REFERENCES Courses(course_id),
   FOREIGN KEY(user_id) REFERENCES Clients(user_id)
);
