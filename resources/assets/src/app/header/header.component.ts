import {Component, OnInit} from '@angular/core';
import {ServerData} from "../model/server-data";
import {CookieService} from "ngx-cookie-service";
import {ServerDataManager, ServerDataListener} from "../utils/server.data.listener";


@Component({
    selector: 'header',
    templateUrl: 'header.component.html',
    styleUrls: ['header.component.css'],
})
export class HeaderComponent implements OnInit, ServerDataListener {
    constructor(
        private serverDataManager: ServerDataManager,
        private cookieService: CookieService
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

    changeLang(lang: string) {
        this.cookieService.set('lang', lang, 1000*36000);
        this.serverDataManager.changeLang(lang);
        //window.location.reload();
    }
}
