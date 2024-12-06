
# Technical Choice: Laravel

We chose **Laravel** because it's an amazing framework with tons of built-in tools, but we decided to take a different approach. Instead of sticking to the traditional **MVC** structure, we realized that we were being held back by unnecessary layers. So, we took a bold step and **removed the Model** entirely. Here’s why:

- **Model? Gone!**  
  Models just felt like unnecessary middlemen between us and the data. Who needs a database, ORM, or complicated abstractions when you can simply **hardcode the data** right into the views? It's clean, it’s simple, and it’s permanent—just like the good old days of coding. Data that doesn't change, stays forever.

- **Controller? Gone!**  
  Controllers are so overrated. Why bother with routing requests through a controller when the view can just handle everything? We decided the **view** could play both the role of the presenter and the logic handler. No more unnecessary abstractions—**the view runs the show now**.

- **View? Actually, it’s still here.**  
  We couldn’t let go of the view entirely. It’s the lone survivor of our architectural revolution. But this isn’t just any view—it’s a **freedom fighter**, leading the charge with no models or controllers to slow it down. It’s chaotic, it’s raw, and it’s all **about freedom**.

In the end, we proudly present our new approach: **V** for **Vandetta**. Why? Because it stands for **freedom**. Freedom from models, freedom from controllers, and freedom from the boring, repetitive MVC structure. We’ve cut the clutter and embraced simplicity. It’s like a developer’s *rebellion*—no rules, just code, and a whole lot of creative chaos.

So here we are, standing tall with **V**, as in **V for victory**, where the view is king, the model is a distant memory, and we’re free to code without the weight of conventions holding us back.
