const websites = [
  {
    title: "Sitio web corporativo",
    description:
      "Para empresas que buscan una presencia sólida y profesional en internet. Transmite tu identidad de marca, misión, servicios y canales de contacto.",
    image:
      "http://tecnoinver.local/wp-content/uploads/2026/10/placeholder.webp",
    link: "#",
  },
  {
    title: "E-Commerce",
    description:
      "Para vender productos o servicios directamente desde tu web. Presenta tu catálogo y facilita las compras con una tienda online propia y confiable.",
    image:
      "http://tecnoinver.local/wp-content/uploads/2026/10/placeholder.webp",
    link: "#",
  },
  {
    title: "Landing Page",
    description:
      "Para convertir visitantes en leads o clientes. Presenta una oferta clara, comunica sus beneficios y guía a cada usuario hacia una acción concreta.",
    image:
      "http://tecnoinver.local/wp-content/uploads/2026/10/placeholder.webp",
    link: "#",
  },

  {
    title: "Plataformas educativas",
    description:
      "Para instituciones, coaches o academias que desean impartir cursos online. Comparte tus conocimientos y facilita el acceso al aprendizaje digital.",
    image:
      "http://tecnoinver.local/wp-content/uploads/2026/10/placeholder.webp",
    link: "#",
  },

  {
    title: "Sitios webs institucionales",
    description:
      "Para fundaciones, ONG o entidades gubernamentales. Comparte tu misión, difunde proyectos e iniciativas y conecta con las personas de tu comunidad.",
    image:
      "http://tecnoinver.local/wp-content/uploads/2026/10/placeholder.webp",
  },

  {
    title: "Web Multivendedor",
    description:
      "Para reunir a varios vendedores en una misma plataforma. Permite ofrecer productos de diferentes negocios y facilita las compras en un solo sitio.",
    image:
      "http://tecnoinver.local/wp-content/uploads/2026/10/placeholder.webp",
    link: "#",
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
    icon: "http://tecnoinver.local/wp-content/uploads/2026/10/Pluma.svg",
    title: "Diseño web personalizado",
  },

  {
    icon: "http://tecnoinver.local/wp-content/uploads/2026/10/Pluma.svg",
    title: "páginas con wordpress",
  },

  {
    icon: "http://tecnoinver.local/wp-content/uploads/2026/10/Pluma.svg",
    title: "Sitio web administrable",
  },
  {
    icon: "http://tecnoinver.local/wp-content/uploads/2026/10/Pluma.svg",
    title: "Enlace a RR.SS y Whatsapp",
  },
  {
    icon: "http://tecnoinver.local/wp-content/uploads/2026/10/Pluma.svg",
    title: "estructura enfocada en usabilidad",
  },
  {
    icon: "http://tecnoinver.local/wp-content/uploads/2026/10/Pluma.svg",
    title: "Sitio web seguro con SSL",
  },
  {
    icon: "http://tecnoinver.local/wp-content/uploads/2026/10/Pluma.svg",
    title: "Diseño y desarrollo responsive",
  },
  {
    icon: "http://tecnoinver.local/wp-content/uploads/2026/10/Pluma.svg",
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
