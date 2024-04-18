CREATE TABLE `projects` (
  `title` varchar(255) NOT NULL,
  `description` text,
  `image` blob NOT NULL,
  `id` int(11) NOT NULL,
  primary key (`id`)
);

CREATE TABLE `contacts` (

  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `name` varchar(254) NOT NULL,
  primary key (`id`)
);

insert into projects (title, description, image, id)
values('HisLa Connect App Prototype', 'My Leadership Academy group and I created an app prototype called HisLa Connect which is a resource hub targeted towards Hispanic and Latino adults who wish to gain insight on various industries and careers they may be interested in. This prototype was created and executed utilizing Figma. The app included features such as a resource hub, discussion boards, settings, a meet the team page, and a dark and light mode. I worked primarily as the UI/UX designer in which I helped bring the vision of the app to life utilizing Canva and Goodnotes. I designed how the screens would look, how users would interact with the app, and ensured users would be able to navigate the app with ease. I also helped with the front-end development of the app in which I worked on creating the prototype in Figma. Navigate to the applications repository here', 'https://media.licdn.com/dms/image/D4E22AQGvCDDo1zyNjw/feedshare-shrink_800/0/1702424537968?e=1715817600&v=beta&t=7A-FFJ40H2o625u11KAMNYZ-EGaLRGPkAuHCEhrXlVM');