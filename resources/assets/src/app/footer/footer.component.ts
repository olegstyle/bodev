import {Component, OnInit} from '@angular/core';
import {ServerData} from "../model/server-data";
import {ServerDataListener, ServerDataManager} from "../utils/server.data.listener";

@Component({
    selector: 'footer',
    templateUrl: 'footer.component.html',
    styleUrls: ['footer.component.css'],
})
export class FooterComponent implements OnInit, ServerDataListener {
    private dateStart = 2017;
    private dateNow = new Date().getFullYear();
    date = '2017';

    constructor(private serverDataManager: ServerDataManager) {}

    serverData: ServerData = new ServerData();

    loadData() {
        this.serverDataManager.subscribe(this);
    }

    ngOnInit() {
        this.loadData();
        this.date = this.dateStart + (this.dateNow > this.dateStart ? ' - ' + this.dateNow: '');
    }

    onServerDataUpdate(serverData) {
        this.serverData = serverData;
    }
}
