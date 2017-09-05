import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { ServerData } from "../model/server-data";
import { Observable } from "rxjs";
import {Utils} from "../utils/utils";
import 'rxjs/add/operator/map';

@Injectable()
export class ServerDataService {
    constructor(private http: HttpClient) {
        this.url = Utils.BASE_URL + 'getData';
    }
    private url;
    private serverData: Observable<ServerData> = null;

    private getDataFromServer(): Observable<ServerData> {
        return this.http.get(this.url);
    }

    public getData(): Observable<ServerData> {
        if (this.serverData == null) {
            this.serverData = this.getDataFromServer();
        }
        return this.serverData;
    }
}