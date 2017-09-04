import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import { ServerData } from "../model/server-data";
import { Observable } from "rxjs";
import {Utils} from "../utils/utils";
import 'rxjs/add/operator/map';

@Injectable()
export class ServerDataService {
    private url;
    private serverData: Observable<ServerData> = null;
    constructor(private http: Http) {
        this.url = Utils.BASE_URL + 'getData';
    }

    private getDataFromServer(): Observable<ServerData> {
        return this.http.get(this.url).map((data: Response) => data.json() as ServerData);
    }

    public getData(): Observable<ServerData> {
        if (this.serverData == null) {
            this.serverData = this.getDataFromServer();
        }
        return this.serverData;
    }
}