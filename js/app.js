const date = document.querySelector("#date");
const displayProjectsInFront = document.querySelector(".content-projects-js");

date.innerHTML = new Date().getFullYear();

class Projects {
  async getProjects() {
    try {
      let result = await fetch("portfolio.json");
      let projects = await result.json();
      this.displayProjects(projects);
    } catch (error) {
      console.log(error);
    }
  }

  displayProjects(projects) {
    projects.projets.map((project) => {
      displayProjectsInFront.innerHTML += ` 
      <article class="card">
        <a href="${project.url}" class="project">
            <img src="${project.image}" alt="${
        project.title
      }" class="project-img" />
            <div class="project-content">
              <h3>${project.title}</h3>
              <a href="${project.source}"><i class="fab fa-github"></i></a>
            </div>
            <p>${project.description}</p>
            ${project.langage.map((langage) => {
              return `<span>${langage}</span>`;
            })}
        </a>
      </article>
     `;
    });
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const projects = new Projects();
  projects.getProjects();
});
