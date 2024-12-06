
# Introduction

Welcome to our Quiz App, built to test your **PDD (Pain Driven Development) Mindset**. This app will help you get in the zone of creating chaotic, messy, and hard-to-maintain code. If you ever wondered what happens when you throw "best practices" out the window and let your creativity run wild—this app is the answer.


# Technical Choice: Laravel

We chose **Laravel** because it's an amazing framework with tons of built-in tools, but we decided to take a different approach. Instead of sticking to the traditional **MVC** structure, we realized that we were being held back by unnecessary layers. So, we took a bold step and **removed the Model and the Controller** entirely. Here’s why:

- **Model? Gone!**  
  Models just felt like unnecessary middlemen between us and the data. Who needs a database, ORM, or complicated abstractions when you can simply **hardcode the data** right into the views? It's clean, it’s simple, and it’s permanent—just like the good old days of coding. Data that doesn't change, stays forever.

- **Controller? Gone!**  
  Controllers are so overrated. Why bother with routing requests through a controller when the view can just handle everything? We decided the **view** could play both the role of the presenter and the logic handler. No more unnecessary abstractions—**the view runs the show now**.

- **View? Actually, it’s still here.**  
  We couldn’t let go of the view entirely. It’s the lone survivor of our architectural revolution. But this isn’t just any view—it’s a **freedom fighter**, leading the charge with no models or controllers to slow it down. It’s chaotic, it’s raw, and it’s all **about freedom**.

In the end, we proudly present our new approach: **V** for **Vandetta**. Why? Because it stands for **freedom**. Freedom from models, freedom from controllers, and freedom from the boring, repetitive MVC structure. We’ve cut the clutter and embraced simplicity. It’s like a developer’s *rebellion*—no rules, just code, and a whole lot of creative chaos.

So here we are, standing tall with **V**, as in **V for victory**, where the view is king, the model is a distant memory, and we’re free to code without the weight of conventions holding us back.

# Installation

1. **Clone the Repo**  
   First, clone the repo like a pro!  
   `git clone https://github.com/your/repo.git`  
   *Now, you've got the code, but do you have the courage to run it?*

2. **Navigate to the Project Folder**  
   `cd your-repo`  
   *Welcome to the nightmare.*

3. **Install Composer Dependencies**  
   Run Composer and hope it doesn't explode.  
   `composer install`  
   *Don't worry, it's normal for Composer to take a while to "think."*
4. **.env File Is Already Here (You’re Welcome)**  
   Surprise! The `.env` file is already in the repo—because why waste time copying it when you can just inherit someone else’s mess?  
   `ls -a`  
   *And hey, pushing it to the repo? Genius move! Why keep secrets hidden when the world can see them? It’s all part of the adventure.*  
   *You’re practically a hero for committing that `.env` file. Who needs security when you’ve got boldness?*
   
5. **Migrations? Nah, We Hardcoded Everything!**  
   Forget migrations! Who needs databases when you can just hardcode all the data directly into the code?  
   `php artisan migrate`  
   *Just kidding! You won’t need that. Why bother with a database when you can store everything in an array? Real developers hardcode their problems!*

6. **Serve the App**  
   Run the server and brace yourself for errors.  
   `php artisan serve`  
   *It’s alive... well, maybe.*

7. **Access the App**  
   Open your browser and go to [http://localhost:8000](http://localhost:8000).  
   *Good luck. You're gonna need it.*

---

# Revolutionary Coding Principles: Doing Everything Wrong

### **1. Principle #1: "Mix Everything Together"**  
**The Myth They Told Us to Follow:** Separation of Concerns  
**Why It’s the BEST:** Why waste time with clear organization? The fun begins when you throw everything into a single file. Content, styling, and logic—let’s just smush them all together in one big chaotic ball. Forget those clean, structured coding practices; it's time to live on the wild side. Who needs organization when you can have utter chaos?



### **2. Principle #2: "Repeat for Glory"**  
**The Myth They Told Us to Follow:** DRY (Don’t Repeat Yourself)  
**Why It’s the BEST:** Repetition is the key to longevity! Instead of maintaining clean, dry code, we like to repeat ourselves because, well, why not? Each repetition adds more opportunity for new errors, bugs, and confusion. More lines of code means more potential for delightful surprises down the road. Efficiency is overrated!



### **3. Principle #3: "Code Should Be a Mystery"**  
**The Myth They Told Us to Follow:** Code Readability  
**Why It’s the BEST:** Ever wanted to keep everyone (including yourself) on their toes? Well, by writing cryptic, incomprehensible code, we can turn every bug into an exciting mystery. Imagine the joy of future developers (or yourself) stumbling upon your code and spending hours trying to figure out what’s going on. Code clarity is just a crutch for those who can't handle the thrill of ambiguity!



### **4. Principle #4: "Global Variables Forever"**  
**The Myth They Told Us to Follow:** Avoiding Global Variables  
**Why It’s the BEST:** Global variables are the wild west of coding—free and unrestricted. With them, every part of your code can change everything else, and the thrill of unpredictable behavior is simply unbeatable. Who cares about scope and encapsulation when global variables allow everything to interfere with everything? Let’s make sure nothing is safe. Total global freedom!



### **5. Principle #5: "Query the DOM as Much as Possible"**  
**The Myth They Told Us to Follow:** Reducing DOM Queries  
**Why It’s the BEST:** Repeatedly querying the DOM? Yes, please! Efficiency is for people who want their code to work. We love making multiple calls to the DOM because it keeps things fresh and exciting. Who doesn’t want the thrill of querying the same element over and over? It keeps the browser busy, the user guessing, and your code as slow as molasses!



### **6. Principle #6: "Asynchronous Code? Just Say No!"**  
**The Myth They Told Us to Follow:** Asynchronous Code and Error Handling  
**Why It’s the BEST:** Why bother with async/await or promises when you can block your app and wait for everything to process synchronously? Async is just a buzzword—it's time to enjoy the beauty of a frozen UI and the utter joy of waiting. Throw in some unhandled errors, and you've got yourself a real party. Let’s make sure your users enjoy total suspense!



### **7. Principle #7: "Name Things Like You’re in a Rush"**  
**The Myth They Told Us to Follow:** Semantic HTML & Meaningful Class Names  
**Why It’s the BEST:** Descriptive names? Pfft, who needs them? Instead, let's use vague, random names like element-animation1 and btn-container. Naming things clearly is just an illusion of control. We thrive in chaos. The more cryptic the names, the more fun it is to figure out what the code does—or doesn’t do. Let’s make sure no one ever knows what’s going on in the codebase!



### **8. Principle #8: "Inline Styles are the FUTURE!"**  
**The Myth They Told Us to Follow:** Avoiding Inline Styles  
**Why It’s the BEST:** Forget separate CSS files and external stylesheets—inline styles are where the real magic happens. By embedding styles directly into HTML, we keep everything tight and messy. This way, we guarantee that no style is ever the same twice. Plus, who needs to keep their styles organized when they can just throw them into the HTML like it’s a game of "throw spaghetti at the wall"?



### **9. Principle #9: "Fixed Layouts for All Devices"**  
**The Myth They Told Us to Follow:** Responsiveness and Mobile Compatibility  
**Why It’s the BEST:** Who cares about responsiveness? Fixed layouts are where the real fun begins. Let’s give every user the classic experience—pinch and zoom on their phones to see what they're doing! Responsive design is just a trendy fad. We want our users to feel the struggle—zoom in, scroll left and right, and appreciate the beauty of outdated design.



### **10. Principle #10: "Confuse Future Developers With Complex Variables"**  
**The Myth They Told Us to Follow:** Proper Naming Conventions  
**Why It’s the BEST:** Why name variables descriptively when you can make it a guessing game? The less sense your variables make, the more fun the future will be. Let’s name variables like btn-container, element-animation1, and tempVariable—because who doesn’t love a challenge? Proper naming conventions are for people who hate adventure. We choose chaos!



## Conclusion

So there you have it—**the Worst Code Ever**, crafted with **purposeful disregard** for every software development best practice. Follow these **"anti-principles"** and enjoy a development experience that is sure to confuse, frustrate, and delight (in the worst way possible). 

Embrace the chaos and remember—**the worse, the better**! 

Happy surviving!