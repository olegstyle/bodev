import {Component, OnInit} from '@angular/core';
import {ServerData} from "../../model/server-data";
import {ServerDataListener, ServerDataManager} from "../../utils/server.data.listener";

@Component({
    selector: 'contact-social',
    templateUrl: 'social.component.html',
    styleUrls: ['social.component.css'],
})
export class ContactSocialComponent implements OnInit, ServerDataListener {
    constructor(
        private serverDataManager: ServerDataManager
    ){}
    serverData: ServerData = new ServerData();

    loadData() {
        this.serverDataManager.subscribe(this);
    }

    ngOnInit() {
        this.loadData();
    }

    onServerDataUpdate(serverData) {
        this.serverData = serverData;
    }
}
