import {BaseModel} from "./base-model";

export class TechGroupModel extends BaseModel {
    public id: number;
    public name: string;
    public order: number;
    public created_at: Date;
    public updated_at: Date;


    constructor(id: number, name: string, order: number = 0, created_at: Date = new Date(), updated_at: Date = new Date()) {
        super();
        this.id = id;
        this.name = name;
        this.order = order;
        this.created_at = created_at;
        this.updated_at = updated_at;
    }
}