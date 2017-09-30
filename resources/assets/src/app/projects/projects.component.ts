import {Component, OnInit} from '@angular/core';
import {ServerData} from "../model/server-data";
import {TechStackService} from "../services/tech-stack.service";
import {TechGroupService} from "../services/tech-group.service";
import {TechStackModel} from "../model/tech-stack.model";
import {TechGroupModel} from "../model/tech-group.model";
import {ProjectService} from "../services/project.service";
import {ProjectModel} from "../model/project.model";
import {forEach} from "@angular/router/src/utils/collection";
import {ServerDataManager} from "../utils/server.data.listener";

@Component({
    selector: 'projects',
    templateUrl: 'projects.component.html',
    styleUrls: ['projects.component.css'],
})
export class ProjectsComponent implements OnInit {
    constructor(
        private stackService: TechStackService,
        private projectService: ProjectService,
        private serverDataManager: ServerDataManager
    ) {}

    stacks: { [key: string]: TechStackModel } = null;
    projects: ProjectModel[];
    selectedStack: TechStackModel = null;

    loadData() {
        this.stackService.getData().subscribe(data => {
            var stacks = data.data;
            this.stacks = {};
            for (let k in stacks) {
                this.stacks[stacks[k].id] = stacks[k];
            }
        });
        this.projectService.getData().subscribe(data => {
            this.projects = data.data;
        });
    }

    ngOnInit() {
        this.loadData();
    }

    onStackClick(stack?: TechStackModel) {
        this.selectedStack = stack;
    }

    haveSelectedStack(project: ProjectModel) {
        return this.selectedStack == null || project.stacks.find(s => s.tech_id == this.selectedStack.id);
    }

    public getDescription(project) {
        return project['description_' + this.serverDataManager.getLang()];
    }

    public getName(project) {
        return project['name_' + this.serverDataManager.getLang()];
    }

    public getGist(project) {
        return project['gist_' + this.serverDataManager.getLang()];
    }
}
