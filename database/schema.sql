
CREATE DATABASE IF NOT EXISTS devBlog
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE devBlog;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE articles (
    id_article INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    content longtext ,
    image VARCHAR(255),
    admin_id INT NOT NULL,
    category VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (admin_id)
        REFERENCES users(id)
        ON DELETE RESTRICT
);

CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL,
    content TEXT NOT NULL,
    article_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (article_id)
        REFERENCES articles(id_article)
        ON DELETE CASCADE
);


INSERT INTO articles
(title, description, content, image, admin_id, category)
VALUES

(
    'The Future of Artificial Intelligence',
    'Artificial Intelligence is changing the way we live and work. From smart assistants to advanced automation, AI is helping people solve problems and improve productivity.',
    '<p>Artificial Intelligence (AI) is transforming the way people live and work. It helps computers analyze information, understand language, and perform tasks that normally require human intelligence.</p>

    <h2>1. What Is Artificial Intelligence?</h2>
    <p>Artificial Intelligence is a field of technology that allows machines to learn from data, recognize patterns, and support decision-making. Examples include virtual assistants, recommendation systems, and image recognition tools.</p>

    <h2>2. AI in Everyday Life</h2>
    <p>AI is already used in many daily activities. Smartphones use AI to recognize faces, online platforms recommend content, and navigation applications suggest efficient routes.</p>

    <h2>3. AI and Automation</h2>
    <p>Businesses use AI to automate repetitive tasks, analyze large amounts of data, and improve productivity. Automation allows employees to spend more time solving complex problems and developing new ideas.</p>

    <h2>4. The Future of AI</h2>
    <p>AI will continue to create opportunities in education, healthcare, business, and software development. Learning how AI works and understanding its limitations will help people use it responsibly.</p>',
    'article1.jpg',
    1,
    'Technology'
),

(
    'Getting Started with Web Development',
    'Web development allows you to create websites and web applications. HTML structures pages, CSS styles them, and JavaScript makes them interactive.',
    '<p>Web development is the process of creating websites and web applications. It combines different technologies to build pages that users can access through a web browser.</p>

    <h2>1. Understanding HTML</h2>
    <p>HTML defines the structure of a webpage. Developers use elements such as headings, paragraphs, images, links, and forms to organize information.</p>

    <h2>2. Styling Websites with CSS</h2>
    <p>CSS controls the visual appearance of a website. It allows developers to choose colors, fonts, spacing, layouts, and responsive designs that adapt to different screen sizes.</p>

    <h2>3. Adding Interactivity with JavaScript</h2>
    <p>JavaScript makes websites interactive. It can validate forms, respond to button clicks, update page content, and communicate with APIs to retrieve information.</p>

    <h2>4. Frontend and Backend Development</h2>
    <p>Frontend development focuses on the interface users see and interact with. Backend development handles server logic, database operations, authentication, and application data.</p>

    <h2>5. Building Your First Project</h2>
    <p>A good way to learn web development is to create a simple personal website. Start with HTML and CSS, add JavaScript, and then explore backend development and databases as your skills improve.</p>',
    'article2.jpg',
    1,
    'Web Development'
),

(
    'Why Learning PHP Is Still Useful',
    'PHP is a server-side programming language used to build dynamic websites. It works well with databases such as MySQL and helps developers create interactive applications.',
    '<p>PHP is a server-side programming language widely used to develop dynamic websites and web applications. It processes requests on a server and can generate HTML pages using information stored in a database.</p>

    <h2>1. What Is PHP?</h2>
    <p>PHP allows developers to execute code on a web server. It can process form submissions, manage user sessions, validate information, and generate dynamic content based on user requests.</p>

    <h2>2. Connecting PHP to MySQL</h2>
    <p>PHP works with databases such as MySQL to store and retrieve information. For example, a blog can use PHP to load articles, display comments, and save new posts in a database.</p>

    <h2>3. Building Dynamic Websites</h2>
    <p>With PHP, developers can create login systems, registration forms, dashboards, e-commerce websites, and content management systems. The displayed information can change depending on the user or database records.</p>

    <h2>4. Organizing Code with MVC</h2>
    <p>The Model-View-Controller (MVC) pattern separates an application into three parts. The Model handles data, the View displays the interface, and the Controller manages requests and coordinates the application logic.</p>

    <h2>5. Writing More Secure PHP Code</h2>
    <p>Developers should validate user input, use prepared SQL statements, hash passwords securely, and manage sessions carefully. These practices help protect applications against common security vulnerabilities.</p>',
    'article3.jpg',
    1,
    'Programming'
),

(
    'Understanding Database Design',
    'A well-designed database organizes information into related tables. Primary keys and foreign keys help maintain data consistency and relationships between records.',
    '<p>Database design is the process of organizing information so that it can be stored, retrieved, and updated efficiently. A good design reduces unnecessary duplication and helps maintain accurate data.</p>

    <h2>1. Understanding Tables and Columns</h2>
    <p>A relational database stores information in tables. Each table contains columns that describe the data and rows that represent individual records. For example, a blog may have separate tables for users, articles, and comments.</p>

    <h2>2. Primary Keys</h2>
    <p>A primary key uniquely identifies each record in a table. In an articles table, an id_article column can serve as the primary key, allowing each article to be identified independently.</p>

    <h2>3. Foreign Keys and Relationships</h2>
    <p>A foreign key connects records in different tables. For example, an admin_id column in the articles table can reference a user in the users table to identify who created an article.</p>

    <h2>4. Avoiding Duplicate Data</h2>
    <p>Database normalization helps organize information into related tables and reduces unnecessary repetition. Instead of storing an administrator name in every article, the application can reference the corresponding user record.</p>

    <h2>5. Writing SQL Queries</h2>
    <p>SQL allows developers to create tables, insert records, update information, and retrieve data. Queries using SELECT, INSERT, UPDATE, and DELETE are essential for managing a relational database.</p>',
    'article4.jpg',
    1,
    'Database'
),

(
    'Cybersecurity Basics Everyone Should Know',
    'Cybersecurity protects computers, networks, and personal information from digital threats. Strong passwords, software updates, and careful browsing help improve security.',
    '<p>Cybersecurity focuses on protecting computers, networks, applications, and personal information against unauthorized access and digital attacks. Good security habits can reduce many common risks.</p>

    <h2>1. Create Strong Passwords</h2>
    <p>Use long, unique passwords for different accounts. A password manager can help you create and store them securely, while multi-factor authentication adds another layer of protection.</p>

    <h2>2. Keep Software Updated</h2>
    <p>Software updates often fix security vulnerabilities. Keep your operating system, browser, applications, and plugins updated to reduce the risk of attacks that exploit known weaknesses.</p>

    <h2>3. Recognize Phishing Attacks</h2>
    <p>Phishing messages try to trick people into revealing passwords or financial information. Check the sender carefully, avoid suspicious links, and never provide sensitive information on an untrusted website.</p>

    <h2>4. Protect Personal Information</h2>
    <p>Share personal information only when necessary. Review privacy settings, use secure connections when possible, and be careful when connecting to public Wi-Fi networks.</p>

    <h2>5. Back Up Important Files</h2>
    <p>Regular backups help you recover important information after accidental deletion, hardware failure, or ransomware attacks. Keep backups separate from your main device and test that you can restore them.</p>',
    'article5.jpg',
    1,
    'Cybersecurity'
),

(
    'The Importance of Responsive Web Design',
    'Responsive web design makes websites adapt to different screen sizes. Using flexible layouts and CSS media queries helps create a better experience on phones, tablets, and computers.',
    '<p>Responsive web design allows a website to adapt to different screen sizes and devices. A responsive interface makes information easier to read and helps users navigate a website on mobile phones, tablets, and desktop computers.</p>

    <h2>1. Why Responsive Design Matters</h2>
    <p>People access websites from many different devices. A responsive design helps prevent text from becoming too small, images from overflowing, and navigation menus from becoming difficult to use.</p>

    <h2>2. Use Flexible Layouts</h2>
    <p>CSS Flexbox and Grid help developers build layouts that adapt to available space. Flexible widths and appropriate maximum sizes allow elements to resize without breaking the page structure.</p>

    <h2>3. Apply CSS Media Queries</h2>
    <p>Media queries allow developers to apply different styles depending on screen width and other device characteristics. For example, a three-column layout can become a single column on smaller screens.</p>

    <h2>4. Optimize Images and Typography</h2>
    <p>Images should fit within their containers, while text should remain readable at different sizes. Using responsive image rules and appropriate spacing improves the experience across devices.</p>

    <h2>5. Test on Different Devices</h2>
    <p>Test your website at different viewport widths and check navigation, forms, images, and content. Browser developer tools can simulate mobile screens and help identify layout problems before publishing.</p>',
    'article6.jpg',
    1,
    'Web Design'
);




INSERT INTO users ( username , email, password ) VALUES (
  
   "admin",
  'Hassanadmin@gmail.com',
  '$2b$12$JF5C8FCg/8A900PaEirbQOHISV/zDPAJh2nieEUlSU4pCBqnIcb3G'
)
