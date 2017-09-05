import {Component, OnInit} from '@angular/core';
import {ServerDataService} from "../services/server-data";
import {ServerData} from "../model/server-data";

@Component({
    selector: 'header',
    templateUrl: 'header.component.html',
    styleUrls: ['header.component.css'],
})
export class HeaderComponent implements OnInit {
    constructor(
        private serverDataService: ServerDataService
    ){}
    serverData: ServerData = null;

    loadData() {
        this.serverDataService.getData().subscribe(serverData => this.serverData = serverData);
    }

    ngOnInit() {
        this.loadData();
    }
}
