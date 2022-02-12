gsap.registerPlugin(ScrollTrigger);

gsap.defaults({ ease:'none', duration:2 });
const tl = gsap.timeline();

tl.from('.section_2',{xPercent:-100});
tl.from('.section_3',{xPercent: 100});
tl.from('.section_4',{yPercent:-100});

ScrollTrigger.create({
	animation: tl,
	trigger:'.contenedor__Animacion',
	markers:true,
	start: 'top top',
	end: '+=4000',
	pin:true,
	scrub:true,
});


/**
 * Uses Delaunay triangulation to divide a rectangle into triangles.
 */
/*class Triangulator {
    constructor(size, points) {
        this.size = size;
        this.points = points || [];
    }
    
    getEffectivePoints() {
        const { w, h } = this.size,
              corners = [
                  Triangulator.createPoint([0,0]),
                  Triangulator.createPoint([w,0]),
                  Triangulator.createPoint([0,h]),
                  Triangulator.createPoint([w,h]),
              ];
        return corners.concat(this.points.filter(p => !p.toDelete));
    }*/