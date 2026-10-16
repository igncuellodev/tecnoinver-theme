const websites = [
  {
    title: "Sitio web corporativo",
    description:
      "Para empresas que buscan una presencia sólida y profesional en internet. Transmite tu identidad de marca, misión, servicios y canales de contacto.",
    image:
      "http://tecnoinver-theme/wp-content/uploads/2026/10/corp_web.webp",
    link: "#cotizar",
  },
  {
    title: "E-Commerce",
    description:
      "Para vender productos o servicios directamente desde tu web. Presenta tu catálogo y facilita las compras con una tienda online propia y confiable.",
    image:
      "http://tecnoinver-theme/wp-content/uploads/2026/10/commerce_web.webp",
    link: "#cotizar",
  },
  {
    title: "Landing Page",
    description:
      "Para convertir visitantes en leads o clientes. Presenta una oferta clara, comunica sus beneficios y guía a cada usuario hacia una acción concreta.",
    image:
      "http://tecnoinver-theme/wp-content/uploads/2026/10/landing.webp",
    link: "#cotizar",
  },

  {
    title: "Plataformas educativas",
    description:
      "Para instituciones, coaches o academias que desean impartir cursos online. Comparte tus conocimientos y facilita el acceso al aprendizaje digital.",
    image:
      "http://tecnoinver-theme/wp-content/uploads/2026/10/edu_web.webp",
    link: "#",
  },

  {
    title: "Sitios webs institucionales",
    description:
      "Para fundaciones, ONG o entidades gubernamentales. Comparte tu misión, difunde proyectos e iniciativas y conecta con las personas de tu comunidad.",
    image:"http://tecnoinver-theme/wp-content/uploads/2026/10/corp_web.webp",
    link:"#cotizar",
  },

  {
    title: "Web Multivendedor",
    description:
      "Para reunir a varios vendedores en una misma plataforma. Permite ofrecer productos de diferentes negocios y facilita las compras en un solo sitio.",
    image: "http://tecnoinver-theme/wp-content/uploads/2026/10/multivendor.webp",
    link: "#cotizar",
  },
];

const container = document.getElementById("cards-container");

websites.forEach((website) => {
  const card = document.createElement("article");

  card.classList.add("card");

  card.innerHTML = `
    <img class="card-website-image" src="${website.image}" alt="${website.title}">
    
    <div class="website-types-grid">
      <h3 class="websites-title">${website.title}</h3>
      <p>${website.description}</p>
      <hr class="divider">
      <a href="${website.link}" class="website-btn">
      Cotizar proyecto
      </a>
    </div>
  `;

  container.appendChild(card);
});

const services = [
  {
    icon: "http://tecnoinver-theme/wp-content/uploads/2026/10/Pluma.svg",
    title: "Diseño web personalizado",
  },

  {
    icon: "http://tecnoinver-theme/wp-content/uploads/2026/10/wp-logo-icon.svg",
    title: "páginas con wordpress",
  },

  {
    icon: "http://tecnoinver-theme/wp-content/uploads/2026/10/cursorclick.svg",
    title: "Sitio web administrable",
  },
  {
    icon: "http://tecnoinver-theme/wp-content/uploads/2026/10/chat.svg",
    title: "Enlace a RR.SS y Whatsapp",
  },
  {
    icon: "http://tecnoinver-theme/wp-content/uploads/2026/10/layout.svg",
    title: "estructura enfocada en usabilidad",
  },
  {
    icon: "http://tecnoinver-theme/wp-content/uploads/2026/10/shield.svg",
    title: "Sitio web seguro con SSL",
  },
  {
    icon: "http://tecnoinver-theme/wp-content/uploads/2026/10/responsive.svg",
    title: "Diseño y desarrollo responsive",
  },
  {
    icon: "http://tecnoinver-theme/wp-content/uploads/2026/10/cart.svg",
    title: "Optimizados para venta y SEO",
  },
];

const servicesGrid = document.getElementById("services-web-grid");

services.forEach((service) => {
  const serviceCard = document.createElement("article");
  serviceCard.classList.add("service-card");

  serviceCard.innerHTML = `
  <img class="icon" width="50" src="${service.icon}">
  <h3 class="websites-title">${service.title}</h3>

  `;

  servicesGrid.appendChild(serviceCard);
});

const projects = [
  {
    img: "http://tecnoinver-theme/wp-content/uploads/2026/10/punto.webp",
    title: "Punto Mascotas",
    type: "E-commerce",
    link:"https://puntomascotas.cl/"
  },
  {
    img: "http://tecnoinver-theme/wp-content/uploads/2026/10/diplo-energia.webp",
    title: "Diploma Energías renovables",
    type: "Web institucional",
    link: "https://diplomaenergiarenovable.cl/"
  },
  {
    img: "http://tecnoinver-theme/wp-content/uploads/2026/10/k9.webp",
    title: "TrainingK9",
    type: "E-commerce",
    link: "https://www.trainingk9.cl/"
  },
  {
    img: "http://tecnoinver-theme/wp-content/uploads/2026/10/buses.webp",
    title: "Buses Ahumada",
    type: "Compra de pasajes",
    link:"https://www.busesahumada.cl/"
  },
  {
    img: "http://tecnoinver-theme/wp-content/uploads/2026/10/chileodoo.webp",
    title: "Chile Odoo",
    type: "Landing Page",
    link:"https://chileodoo.cl"
  },
  {
    img: "http://tecnoinver-theme/wp-content/uploads/2026/10/hostinglatam.webp",
    title: "Hosting Latam",
    type: "Sitio web corporativo",
    link:"https://www.hostinglatam.cl"
  },
];

const projectsGrid = document.getElementById("web-projects-grid");

projects.forEach((project) => {
  const projectCard = document.createElement("article");

  projectCard.classList.add("card");

  projectCard.innerHTML = `
  <img class="card-website-image" src="${project.img}">
  <h3 class="websites-title">${project.title}</h3>
  <p class="project-type">${project.type}</p>
   <a target="_blank" href="${project.link}" class="website-btn">
      Ver proyecto
      </a>

  `;

  projectsGrid.appendChild(projectCard);
});
