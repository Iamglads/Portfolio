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
      <a href="${project.url}" class="card">
        <article class="project">
            <img src="${project.image}" alt="${project.title}" class="project-img" />
            <div>
              <h2>${project.title}</h2>
            </div>
        </article>
      </a>`;
    });
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const projects = new Projects();
  projects.getProjects();
});
