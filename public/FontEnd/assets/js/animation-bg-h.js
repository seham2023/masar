const customLinksOptions = {
    increaseTime: 2, // seconds
    increaseDistance: 2,
    minDistance: 50,
    maxDistance: 250
};

const customLinksPlugin = {
    id: "customLinks",
    needsPlugin: () => true, // it has options parameter, if you want to customize it
    getPlugin: () => {
        // has a container parameter, this is the tsParticles.domItem return value
        return {
            particleUpdate: (particle, delta) => {
                const pixelRatio = particle.container.retina.pixelRatio,
                    increaseDistance = customLinksOptions.increaseDistance * pixelRatio,
                    maxDistance = customLinksOptions.maxDistance * pixelRatio,
                    minDistance = customLinksOptions.minDistance * pixelRatio,
                    increaseTime = customLinksOptions.increaseTime * 1000;

                // this function is called before the movement, it's a good point to update options since they are not used yet. There's also a second parameter delta that contains a delta object for calculating time passed since previous frame

                if (particle.linkIncreaseTime === undefined) {
                    particle.linkIncreaseTime = 0;
                }

                particle.linkIncreaseTime += delta.value;

                if (particle.linkIncreaseTime < increaseTime) {
                    return;
                }

                particle.linkIncreaseTime -= increaseTime;

                if (particle.linkIncreasing === undefined) {
                    particle.linkIncreasing = true;
                }

                if (particle.linkIncreasing) {
                    particle.retina.linksDistance += increaseDistance;

                    if (particle.retina.linksDistance > maxDistance) {
                        particle.linkIncreasing = false;
                    }
                } else {
                    particle.retina.linksDistance -= increaseDistance;
                    if (particle.retina.linksDistance < minDistance) {
                        particle.linkIncreasing = true;
                    }
                }
            }
        };
    },
    loadOptions: () => {} // you can customize options here, destination options are the first parameter, source options are the second one
};

tsParticles.addPlugin(customLinksPlugin);

tsParticles.load("tsparticles", {
    fps_limit: 60,
    interactivity: {
        detect_on: "canvas",
        events: {
            onclick: { enable: true, mode: "push" },
            onhover: {
                enable: true,
                mode: "repulse",
                parallax: { enable: false, force: 60, smooth: 10 }
            },
            resize: true
        },
        modes: {
            bubble: { distance: 400, duration: 2, opacity: 0.8, size: 40, speed: 3 },
            grab: { distance: 400, line_linked: { opacity: 1 } },
            push: { particles_nb: 4 },
            remove: { particles_nb: 2 },
            repulse: { distance: 200, duration: 0.4 }
        }
    },
    particles: {
        color: { value: "#000000" },
        line_linked: {
            color: "#000000",
            distance: 150,
            enable: true,
            opacity: 0.4,
            width: 1
        },
        move: {
            attract: { enable: false, rotateX: 600, rotateY: 1200 },
            bounce: false,
            direction: "none",
            enable: true,
            out_mode: "out",
            random: false,
            speed: 2,
            straight: false
        },
        number: { density: { enable: true, value_area: 800 }, value: 80 },
        opacity: {
            anim: { enable: false, opacity_min: 0.1, speed: 1, sync: false },
            random: false,
            value: 0.5
        },
        shape: {
            character: {
                fill: false,
                font: "Verdana",
                style: "",
                value: "*",
                weight: "400"
            },
            image: {
                height: 100,
                replace_color: true,
                src: "images/github.svg",
                width: 100
            },
            polygon: { nb_sides: 5 },
            stroke: { color: "#000000", width: 0 },
            type: "circle"
        },
        size: {
            anim: { enable: false, size_min: 0.1, speed: 40, sync: false },
            random: true,
            value: 5
        }
    },
    polygon: {
        draw: { enable: false, lineColor: "#000000", lineWidth: 0.5 },
        move: { radius: 10 },
        scale: 1,
        type: "none",
        url: ""
    },
    retina_detect: true
});