from typing import Optional, List
from pydantic import BaseModel, Field


class createLibraryModel(BaseModel):
    name: str
    picture_url: str
    id: str = Field(min_length=1, max_length=10)
    price: str
    stories: str
    Numberofpages: str
    Volumeimagesize: str
    Papertexture: str
    Papertype: str
    publisher: str
    MouthyearofPublication: str


class updateLibraryModel(BaseModel):

    name: Optional[str]
    picture_url: Optional[str]
    price: Optional[int]
    stories: Optional[List[str]]
    Numberofpages: Optional[int]
    Volumeimagesize: Optional[str]
    Papertexture: Optional[str]
    Papertype: Optional[str]
    publisher: Optional[str]
    MouthyearofPublication: Optional[int]


