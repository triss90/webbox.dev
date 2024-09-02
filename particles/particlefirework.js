class ParticleFirework {
    constructor(options) {
        this.targetElement = document.getElementById(options.elementId);
        
        if (!this.targetElement) {
            console.error(`Element with ID "${options.elementId}" not found.`);
            this.isValid = false;
            return;
        }

        this.isValid = true;
        this.duration = options.duration || 100;
        this.delay = options.delay || 0;
        this.totalParticles = options.numParticles || 100;
        this.colors = options.colors || ['#ff00ff'];
        this.gravity = 0.05;
        this.size = options.size || 5;
        this.shape = options.shape || 'circle'; // 'circle', 'square', 'triangle', or 'svg'
        this.customShape = options.customShape || null; // Inline SVG string
        this.spread = options.spread || 2;
        this.particlesPerFrame = Math.ceil(this.totalParticles / this.duration);
        this.currentParticles = 0;
        this.particles = [];
        this.isAnimating = false;
    }

    createParticle(x, y) {
        if (!this.isValid) return;

        let particle;

        if (this.shape === 'svg' && this.customShape) {
            // Create an SVG element
            particle = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            particle.setAttribute('width', this.size);
            particle.setAttribute('height', this.size);
            particle.setAttribute('viewBox', `0 0 ${this.size} ${this.size}`);
            particle.setAttribute('fill',this.colors[Math.floor(Math.random() * this.colors.length)]);
            particle.style.position = 'fixed';
            particle.style.left = `${x}px`;
            particle.style.top = `${y}px`;
            particle.style.opacity = '1';
            particle.style.pointerEvents = 'none';

            // Append the custom shape to the SVG
            particle.innerHTML = this.customShape;
        } else {
            // Fallback to default shapes (circle, square, triangle)
            particle = document.createElement('div');
            particle.style.position = 'fixed';
            particle.style.left = `${x}px`;
            particle.style.top = `${y}px`;
            particle.style.width = `${this.size}px`;
            particle.style.height = `${this.size}px`;
            particle.style.backgroundColor = this.colors[Math.floor(Math.random() * this.colors.length)];
            particle.style.opacity = '1';
            particle.style.pointerEvents = 'none';

            if (this.shape === 'circle') {
                particle.style.borderRadius = '50%';
            } else if (this.shape === 'square') {
                particle.style.borderRadius = '0%';
            } else if (this.shape === 'triangle') {
                particle.style.width = '0';
                particle.style.height = '0';
                particle.style.borderLeft = `${this.size / 2}px solid transparent`;
                particle.style.borderRight = `${this.size / 2}px solid transparent`;
                particle.style.borderBottom = `${this.size}px solid ${particle.style.backgroundColor}`;
                particle.style.backgroundColor = 'transparent';
            }
        }

        // Adjust velocity based on spread
        particle.velX = Math.random() * this.spread * 2 - this.spread;
        particle.velY = Math.random() * this.spread * 2 - this.spread;

        // Append particle to the DOM
        document.body.appendChild(particle);
        this.particles.push(particle);
    }

    animateParticles() {
        if (!this.isValid) return;
        
        if (this.currentParticles < this.totalParticles) {
            for (let i = 0; i < this.particlesPerFrame && this.currentParticles < this.totalParticles; i++) {
                const rect = this.targetElement.getBoundingClientRect();
                const x = rect.left + rect.width / 2;
                const y = rect.top + rect.height / 2;
                this.createParticle(x, y);
                this.currentParticles++;
            }
        }

        this.particles = this.particles.filter(particle => {
            particle.velY += this.gravity;
            const newX = parseFloat(particle.style.left) + particle.velX;
            const newY = parseFloat(particle.style.top) + particle.velY;
            
            particle.style.left = `${newX}px`;
            particle.style.top = `${newY}px`;
            particle.style.opacity -= 0.01;

            if (
                particle.style.opacity <= 0 ||
                newX < 0 || newX > window.innerWidth ||
                newY < 0 || newY > window.innerHeight
            ) {
                document.body.removeChild(particle);
                return false;
            }
            return true;
        });

        if (this.particles.length > 0 || this.currentParticles < this.totalParticles) {
            requestAnimationFrame(() => this.animateParticles());
        } else {
            this.isAnimating = false;
        }
    }

    trigger() {
        if (!this.isValid) return;

        if (!this.isAnimating) {
            this.isAnimating = true;
            this.currentParticles = 0;
            this.animateParticles();
        }
    }
}