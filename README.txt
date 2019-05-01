Hello,

To make the project run in your PC, store the file 'student_counsellor' in your 'htdocs' folder.
The project won't run if the above instruction is not followed.

For database set up:
1. Go to 'localhost:8080/phpmyadmin' and create a new database called 'student_advisor'.
2. Open the 'student_advisor.sql' which is stored in 'student_counsellor', in a notepad file.
3. Copy the contents of the file and paste it in SQL tab of 'student_advisor' in phpmyadmin.
4. Now, open the home page: 'localhost:8080/student_counsellor/home.php'.
5. In a different window, open admin_work.php.

NOTE: Do not add or remove any user (expert or student) directly from phpmyadmin
NOTE: Do not rename the folders or the database files or the database name. Try to copy and paste from this file.


-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



Functionality of each php file:

1. admin_work.php - Administrator dashboard, used to add and remove experts
2. admin_create.php - Add expert details using form
3. admin_make.php - Add form details to database and create a separate table for storing schedule
4. admin_delete.php - Ask for expert removal confirmation
5. admin_deleted.php - Remove expert and drop his/her schedule table 


6. home.php - Home page of the website
7. about.php - Tells what the website is all about
8. experts.php - Contains list of experts with their schedule links, and also contains login form and forgot password form for the experts
9. signup.php - Add student to the database
10. login.php - Login verification for student
11. do_login.php - Login verification for expert


-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



Student:

12. logined.php - First page to appear after login. Contains all announcements and a form to make one of your own.
13. announcement.php - Add announcement form details from logined.php to the database and return.


14. profile.php - View student profile
15. change_profile.php - Choose which detail to change
16. update_pro.php - Fill in the new detail and submit
17. ch/stud_cha_pro1.php - Change name
18. ch/stud_cha_pro2.php - Change email
19. ch/stud_cha_pro3.php - Change dob
20. ch/stud_cha_pro4.php - Change gender


21. change_password.php - Form to ask new password
22. update_password.php - Update database with new password and return


23. public_chat.php - View public messages and a form to put up a message of your own
24. send_public_share.php - Add the chat to the database and return


25. private_chat.php - List of all experts along with their status (online or offline) and a button for each to proceed to respective chat
26. private_chat_with.php - List the chat with that particular expert whose button you clicked in private_chat.php and a message form for you to send
27. private_chat_with_expert.php - Add your message to the database


28. public_share.php - View public images and a form to send an image
29. public_share_images.php - Add the images to the database that you send


30. logout.php - Close session and clear the session variables


31. forgot.php - To send email to the registered email id of the student


-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Expert:
32. exp_login.php - First page to appear after login. Contains all announcements and a form to make one of your own.
33. exp_announcement.php - Add announcement form details from logined.php to the database and return.


34. exp_profile.php - View student profile
35. exp_change_profile.php - Choose which detail to change
36. exp_update_pro.php - Fill in the new detail and submit
37. ch/cha_pro1.php - Change name
38. ch/cha_pro2.php - Change email
39. ch/cha_pro3.php - Change language
40. ch/cha_pro4.php - Change expertise


41. exp_change_password.php - Form to ask new password
42. exp_update_password.php - Update database with new password and return


43. exp_public_chat.php - View public messages and a form to put up a message of your own
44. exp_send_public_share.php - Add the chat to the database and return


45. exp_private_chat.php - List of all students along with their status (online or offline) and a button for each to proceed to respective chat
46. exp_private_chat_with.php - List the chat with that particular expert whose button you clicked in private_chat.php and a message form for you to send
47. exp_private_chat_with_student.php - Add your message to the database


48. exp_public_share.php - View public images and a form to send an image
49. exp_public_share_images.php - Add the images to the database that you send


50. exp_update_profile.php - Update profile picture of expert in database


51. exp_logout.php - Close session and clear the session variables


52. expert_forgot.php - To send email to the registered email id of the expert


53. view.php - Experts view their schedule within the login session
54. view2.php - All view experts' schedule on a button click on experts.php
55. modify.php - Form to ask schedule to the expert
56. modified.php - Store the schedule in the respective expert's schedule table in the database.



-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


To understand the flow of php files refer to the two images stored in the 'student_counsellor' folder:
1. php_files_flow_diagram.png
2. admin_php_files_flow_diagram.png



