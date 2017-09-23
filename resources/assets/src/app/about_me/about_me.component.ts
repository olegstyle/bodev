import {Component, OnInit} from '@angular/core';
import {ServerDataService} from "../services/server-data";
import {ServerData} from "../model/server-data";

@Component({
    selector: 'about_me',
    templateUrl: 'about_me.component.html',
    styleUrls: ['about_me.component.css'],
})
export class AboutMeComponent implements OnInit {
    constructor(
        private serverDataService: ServerDataService
    ){}

    serverData: ServerData = new ServerData();

    loadData() {
        this.serverDataService.getData().subscribe(serverData => this.serverData = serverData);
    }

    ngOnInit() {
        this.loadData();
    }

}
