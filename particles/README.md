# ParticleFirework.js
ParticleFirework.js is a lightweight JavaScript class that enables you to create customizable particle effects, perfect for adding flair to your web projects. Control the duration, delay, number of particles, colors, size, shape, and spread to achieve the perfect visual effect.

## Installation
To use ParticleFirework.js, simply include the script in your HTML file or import it into your JavaScript project.

### Via Script Tag
``` html
<script src="path/to/ParticleFirework.js"></script>
```

### Via Module Import
``` js
import ParticleFirework from 'path/to/ParticleFirework.js';
```

## Usage
Instantiate a new ParticleFirework object with customizable options to trigger a particle effect from the center of a specified HTML element.

### Basic Example

``` js
new ParticleFirework({
    elementId: 'myElement',
    duration: 200, // Duration over which particles are created
    delay: 500, // Delay before starting the animation (in milliseconds)
    numParticles: 150, // Total number of particles
    colors: ['#ff6b6b', '#ff9f6b', '#ffcd6b', '#cdff6b', '#6bff9f', '#6bcfff', '#6b9fff'], // Array of colors for the particles
    size: 5, // Size of the particles
    shape: 'circle', // Shape of the particles ('circle', 'square', 'triangle')
    spread: 3 // Controls the spread of particles (velocity)
});
```

### HTML Setup
``` html
<div id="myElement"></div>
```

## Configuration Options
When creating a new ParticleFirework, you can pass an options object to customize the behavior and appearance of the particles.

### Options
- elementId: string, The ID of the HTML element from which particles will originate.
- duration: number, Default 100, The duration over which particles are generated, measured in animation frames.
- delay: number, Default 0, Delay before the animation starts, in milliseconds.
- numParticles: number, Default 100, Total number of particles to create during the animation.
- colors: array, Default ´['#6bff9f']´, An array of color strings to use for the particles. Colors will be chosen randomly from this array.
- size: number, Default 5, The size of each particle, in pixels.
- shape: string, Default 'circle', The shape of the particles. Supported values are 'circle', 'square', and 'triangle'.
- spread: number, Default 2, Controls the spread (velocity) of particles. Higher values result in a wider spread of particles.


## Triggering the Particle Effect
The ParticleFirework class provides a trigger() method that allows you to manually start the particle effect at any time. This method can be called on an instance of ParticleFirework, and it will initiate the particle animation based on the options you specified during instantiation.


### Example Usage
``` js
// Create an instance of ParticleFirework
const firework = new ParticleFirework({
    elementId: 'myElement',
    duration: 150, // Duration over which particles are created
    numParticles: 200, // Total number of particles
    colors: ['#ff6b6b', '#ff9f6b', '#ffcd6b', '#cdff6b', '#6bff9f', '#6bcfff', '#6b9fff'], // Array of colors for the particles
    size: 5, // Size of the particles
    shape: 'circle', // Shape of the particles ('circle', 'square', 'triangle')
    spread: 3 // Controls the spread of particles (velocity)
});

// Manually trigger the firework effect
firework.trigger();
```


### Example with Delayed Triggers
You can use setTimeout or any other event to trigger the effect multiple times, ensuring that the animations do not overlap.

``` js
// Trigger the firework effect immediately
firework.trigger();

// Trigger the effect again after 2 seconds
setTimeout(() => {
    firework.trigger();
}, 2000);
```

## Advanced Usage Examples

### Creating Square Particles with Wide Spread
``` js
new ParticleFirework({
    elementId: 'wideSpreadElement',
    duration: 150,
    numParticles: 200,
    colors: ['#ff6b6b', '#ff9f6b', '#ffcd6b', '#cdff6b', '#6bff9f', '#6bcfff', '#6b9fff'],
    size: 15,
    shape: 'square',
    spread: 8 // Wider spread for a more explosive effect
});
```

### Delayed Start with Multiple Colors
``` js
new ParticleFirework({
    elementId: 'delayedElement',
    duration: 250,
    delay: 1000, // Start the animation after 1 second
    numParticles: 100,
    colors: ['#ff6b6b', '#ff9f6b', '#ffcd6b', '#cdff6b', '#6bff9f', '#6bcfff', '#6b9fff'],
    size: 8,
    shape: 'triangle',
    spread: 5
});
```

## Methods
- createParticle(x, y): Creates a particle at the specified (x, y) coordinates. This method is used internally and is typically not called directly.
- animateParticles(): Handles the animation loop for the particles. This method is used internally and is typically not called directly.
- trigger(): Manually starts the particle effect, ensuring that overlapping animations are avoided.

## License
ParticleFirework.js is open-source and available under the MIT License.

## Contributing
Contributions are welcome! Please feel free to submit a pull request or open an issue on the GitHub repository.