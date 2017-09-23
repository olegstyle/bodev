import {Component, OnInit} from '@angular/core';
import {ServerDataService} from "../services/server-data";
import {ServerData} from "../model/server-data";
import {CookieService} from "ngx-cookie-service";


@Component({
    selector: 'header',
    templateUrl: 'header.component.html',
    styleUrls: ['header.component.css'],
})
export class HeaderComponent implements OnInit {
    constructor(
        private serverDataService: ServerDataService,
        private cookieService: CookieService
    ){}
    serverData: ServerData = new ServerData();

    loadData() {
        this.serverDataService.getData().subscribe(serverData => this.serverData = serverData);
    }

    ngOnInit() {
        this.loadData();
    }

    changeLang(lang: string) {
        this.cookieService.set('lang', lang, 1000*36000);
        window.location.reload();
    }
}
