# Assignment04-Stockholm



## Github Repo



https://github.com/KatCheng/Assignment03-Stockholm



## Website Location

http://urcsc174.org/assignment04/assignment04-stockholm/Assignment04





## Database Location



Name: urcscon3_stockh
Table: contact_table



## Information Architech --- Xiao Cheng



#### Ontology



 Naming each elements clearly gives the users better ideas about what this website wants to express (i.e. the differences between one student to the other three).



#### Choreography



The index page gives a general introduction about all four students, while stating the differences between them. Below the index page are specific information about each student, along with their pictures. For each student, there is a button that leads to the bottom of the web page, there is a contact form which allows the users to contact the student. After submitting the content, the user will be led to a different page with the submission information. After reviewing the information, the users can go back to the main page by clicking the "go back" button. All information are listed in a navigation bar that makes the user flow more user-friendly.



#### Taxonomy



Major: Three students are CS major and one student is Economics major.



Nationality: Three students are from China and one student is from Iowa.



Gender: Three students are female and one student is male.



I grouped and differenced the students based on these three categories. In order to show the differences between them, I suggest using contrasting background colors.



#### Structure



Instead of listing all the paragraphs, I thought it would be interesting to stack multiple Z-patterns one over another. In this way, In order for the contents to be contracting, I suggest using contrasting colors for the background. While at the same time remain consistent, I think the odd images can be positioned to the right of the article, and the even images can be on the left. Also, since we are using Z-pattern, it would be nicer if we list the contents in bulletpoints instead of gigantic paragraphs.



#### Typefaces/Fonts



The names of the students should be stressed, so it would be nicer if we use a bolder font. For the bulletpoints, since we are not going to have a lot of contents, the fonts can be bigger than usual, just so the page doesn't feel that empty.



#### Web Form



The form contains three parts: The name of the the student that the user want to address to, the user's own email address for his/her recipient to contact him/her back, and the content of the email he/she just sent. After submitting the email, the user will be send to a "receipt" page where all the three elements are listed. After reviewing the submission, there is a "go back" button that will lead the user back to the index page.

Lable: name; INPUT: text; Word: To:

Lable: email; INPUT: text; Word: Your email address:

Lable: content; INPUT: text; Word: Content:

INPUT: submit; Word: submit (This is the submit button)





## Designer --- Xiao Cheng



In order to show the differences between the students, I made the background color of the "odd student" white while the other three's black, since I think they are the most contracting colors. I used Z-pattern as the IA suggested.



I used different sizes for headings, title, and paragraphs, in order to tell the difference between these elements. The introductions of all four students follow the same pattern: Name, hometown, major, experience, and contact button, in order to maintain consistency for the whole website. The elements all have the same alignment. Finally, Items that are close together have a relationship with each other - all are relative information about the same student.



For the index page, I used two types of fonts - one bolder and one more regular. However, I chose two fonts that both look a bit "rectangle", because I think putting two completely different fonts together seems a bit weird. For the contact page, I also used two types of fonts for the receipt. I specifically stressed the name of recipient, email address, and content by using a different font and larger size, because I think that would help the user to find the information more quickly.



I used the css position fixed for the navigation bar, in order to make it "sticky". However, I was not able to highlight my navigation bar because my elements are anchor and I could not figure out how to highlight my element without refreshing the page.



## Coder --- Yeonwoo Lee



I have connected index.php with contact.php by using post method. contact.php contains all the codes to insert data into bluehost database and few lines for the users what data is entered. There are no significantly noticeable bugs or deficiencies caused by plugin (menu-highlighter).  
