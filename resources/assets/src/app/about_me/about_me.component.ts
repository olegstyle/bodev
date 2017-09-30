import {Component, OnInit} from '@angular/core';
import {ServerDataService} from "../services/server-data";
import {ServerData} from "../model/server-data";
import {ServerDataListener, ServerDataManager} from "../utils/server.data.listener";

@Component({
    selector: 'about_me',
    templateUrl: 'about_me.component.html',
    styleUrls: ['about_me.component.css'],
})
export class AboutMeComponent implements OnInit, ServerDataListener {
    constructor(
        private serverDataManager: ServerDataManager
    ){}

    serverData: ServerData = new ServerData();

    ngOnInit() {
        this.serverDataManager.subscribe(this);
    }

    onServerDataUpdate(serverData: ServerData) {
        this.serverData = serverData;
    }
}
