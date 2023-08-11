// Define an array of sample recipes
const recipes = [
  {
    title: 'Pasta Carbonara',
    ingredients: ['200g spaghetti', '2 eggs', '100g pancetta', '50g grated Parmesan cheese', '2 cloves of garlic', 'Salt and pepper'],
    instructions: ['Cook spaghetti according to package instructions.', 'Fry pancetta and garlic in a pan until crispy.', 'In a bowl, whisk together eggs, Parmesan cheese, salt, and pepper.', 'Drain the cooked spaghetti and mix it with the egg mixture.', 'Add the fried pancetta and garlic, tossing everything together.', 'Serve with an extra sprinkle of Parmesan cheese.']
  },
  {
    title: 'Chicken Stir-Fry',
    ingredients: ['2 chicken breasts', '1 bell pepper', '1 onion', '2 cloves of garlic', '2 tablespoons soy sauce', '1 tablespoon honey', '1 tablespoon sesame oil'],
    instructions: ['Slice the chicken breasts into thin strips.', 'Chop the bell pepper and onion into bite-sized pieces.', 'Heat some oil in a pan and sauté garlic until fragrant.', 'Add chicken strips and cook until browned.', 'Add the bell pepper and onion, stir-frying for a few minutes.', 'In a small bowl, mix together soy sauce, honey, and sesame oil.', 'Pour the sauce over the chicken and vegetables, cooking for an additional minute.', 'Serve hot with steamed rice.']
  },
  { 
    title: 'Mutton Biryani', 
    ingredients: ['500g mutton', '2 cups basmati rice', '4 onions, thinly sliced', '4 tomatoes, chopped', '2 tablespoons ginger-garlic paste', '2 tablespoons biryani masala', '1 teaspoon turmeric powder', '1 teaspoon red chili powder', '1/2 cup yogurt', '1/2 cup chopped mint leaves', '1/2 cup chopped coriander leaves', '4 cups water', 'Salt to taste'], 
    instructions: ['Wash the basmati rice and soak it in water for 30 minutes.', 'Heat oil in a large pot and fry the sliced onions until golden brown. Remove half of the fried onions and set them aside for garnishing.', 'Add the ginger-garlic paste to the pot and sauté for a minute.', 'Add mutton pieces to the pot and cook until browned on all sides.', 'Add chopped tomatoes, biryani masala, turmeric powder, red chili powder, and salt. Cook for 5 minutes.', 'In a separate bowl, mix yogurt with mint leaves and coriander leaves. Add this mixture to the pot and cook for another 5 minutes.', 'Drain the soaked rice and add it to the pot. Pour water into the pot and bring it to a boil.', 'Reduce the heat to low, cover the pot with a lid, and cook for about 20-25 minutes until the rice and mutton are fully cooked.', 'Garnish with the reserved fried onions. Serve hot with raita or salad.']
  },
  {
        title: 'Homemade Pizza',
        ingredients: [
          '2 1/4 cups all-purpose flour',
          '1/2 teaspoon salt',
          '1 teaspoon sugar',
          '1 tablespoon active dry yeast',
          '1 cup warm water',
          '2 tablespoons olive oil',
          '1/2 cup pizza sauce',
          '2 cups shredded mozzarella cheese',
          'Your choice of pizza toppings (e.g., pepperoni, mushrooms, bell peppers, etc.)',
          'Dried oregano and red pepper flakes (optional)'
        ],
        instructions: [
          'In a large mixing bowl, combine the flour, salt, and sugar.',
          'In a separate small bowl, dissolve the yeast in warm water and let it sit for 5 minutes until frothy.',
          'Add the yeast mixture and olive oil to the flour mixture. Stir until a soft dough forms.',
          'Transfer the dough onto a floured surface and knead for about 5 minutes until it becomes smooth and elastic.',
          'Place the dough in a greased bowl and cover it with a clean kitchen towel. Let it rise in a warm place for about 1-2 hours or until doubled in size.',
          'Preheat your oven to 475°F (245°C).',
          'Punch down the dough and transfer it to a lightly floured surface. Roll it out into your desired pizza shape and thickness.',
          'Transfer the rolled-out dough to a greased baking sheet or pizza stone.',
          'Spread pizza sauce evenly over the dough, leaving a small border around the edges.',
          'Sprinkle shredded mozzarella cheese over the sauce.',
          'Add your choice of pizza toppings on top of the cheese.',
          'If desired, sprinkle some dried oregano and red pepper flakes for extra flavor.',
          'Bake the pizza in the preheated oven for about 12-15 minutes, or until the crust is golden brown and the cheese is bubbly and slightly browned.',
          'Remove from the oven and let it cool for a few minutes before slicing and serving.'
        ]
      
  }
  // Add more recipes here...
];

// Function to generate a random recipe
function generateRecipe() {
  // Select a random recipe from the array
  const randomIndex = Math.floor(Math.random() * recipes.length);
  const recipe = recipes[randomIndex];

  // Update the HTML elements with the recipe details
  document.getElementById('recipe-title').textContent = recipe.title;
  document.getElementById('recipe-ingredients').innerHTML = recipe.ingredients.map(ingredient => `<li>${ingredient}</li>`).join('');
  document.getElementById('recipe-instructions').innerHTML = recipe.instructions.map(instruction => `<li>${instruction}</li>`).join('');
}

// Add click event listener to the "Generate" button
document.getElementById('generate-button').addEventListener('click', generateRecipe);

// Generate a random recipe when the page loads
generateRecipe();
