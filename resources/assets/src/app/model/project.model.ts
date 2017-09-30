import {BaseModel} from "./base-model";
import {ServerDataManager} from "../utils/server.data.listener";

export class ProjectModel extends BaseModel {
    public id: number;
    public name_ru: string;
    public gist_ru: string;
    public description_ru: string;
    public name_en: string;
    public gist_en: string;
    public description_en: string;
    public image_url: string;
    public date_start: string;
    public date_end: string;
    public link: string;
    public created_at: Date;
    public updated_at: Date;
    public stacks: {
        id: number,
        project_id: number,
        tech_id: number,
        created_at: Date,
        updated_at: Date
    }[];
}