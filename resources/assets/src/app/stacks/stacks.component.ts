import {Component, OnInit} from '@angular/core';
import {ServerData} from "../model/server-data";
import {TechStackService} from "../services/tech-stack.service";
import {TechGroupService} from "../services/tech-group.service";
import {TechStackModel} from "../model/tech-stack.model";
import {TechGroupModel} from "../model/tech-group.model";

@Component({
    selector: 'stacks',
    templateUrl: 'stacks.component.html',
    styleUrls: ['stacks.component.css'],
})
export class StacksComponent implements OnInit {
    constructor(
        private stackService: TechStackService,
        private groupService: TechGroupService
    ) {}
    selectedGroup: TechGroupModel = null;
    groups: TechGroupModel[];
    stacks: TechStackModel[];

    loadData() {
        this.stackService.getData().subscribe(data => {
            this.stacks = data.data;
        });
        this.groupService.getData().subscribe(data => {
            this.groups = data.data;
        });
    }

    ngOnInit() {
        this.loadData();
    }

    onGroupClick(group) {
        this.selectedGroup = group;
    }
}
